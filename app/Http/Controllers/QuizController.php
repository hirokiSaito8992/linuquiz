<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Question;
use App\Models\Choise;
use App\Models\SmallCategory;
use App\Models\LargeCategory;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        return view('contents.index'); //問題選択画面へ
    }

    public function create()
    {
        $small_categories = SmallCategory::all();
        $large_categories = LargeCategory::all();

        return view('contents.create', compact('small_categories', 'large_categories')); //問題投稿画面へ
    }

    public function store(Request $request) //問題投稿画面で送られてきたパラメータをデータベースに格納する
    {
        $questions = new Question; //問題文を格納するモデルインスタンス
        $questions->name = $request->input('problem-statement'); //試験名
        $questions->user_id = $request->user()->id; //認証済みユーザIDを取得
        $questions->category_id = $request->input('subject-field'); //各分野
        $questions->save(); //データベースに反映

        $alternatives1 = $request->input('choice1'); //選択肢1
        $alternatives2 = $request->input('choice2'); //選択肢2
        $alternatives3 = $request->input('choice3'); //選択肢3
        $alternatives4 = $request->input('choice4'); //選択肢4

        $alternatives = collect([
            'choice1' => $alternatives1,
            'choice2' => $alternatives2,
            'choice3' => $alternatives3,
            'choice4' => $alternatives4,
        ]); //選択肢を集計しコレクション型に格納

        $answers = $request->input('answers'); //答えを配列で格納している

        foreach ($alternatives as $key => $value) {

            $choise = new Choise; //選択肢と解答を格納するモデルインスタンス
            $choise->choise = $value; //選択肢
            $choise->question_id = $questions->id; //質問テーブルID

            $choise->correct_answer = false; //基本的にfalseにしておいて、正解があればtrueに変更する

            foreach ($answers as $index => $ans) {
                if ($key === $ans) {
                    $choise->correct_answer = true;
                }
            }
            $choise->save();
        }

        return redirect()->route('quizzes.index')->with('flash_message', '投稿が完了しました');
    }

    /**
     * 問題を編集するためのアクションメソッド
     * 問題と対応した選択肢をeditブレードに値を渡す
     */
    public function edit($question_id)
    {
        //idに該当した問題モデルを取得
        $questions = Question::where('id', $question_id)->first();
        //idに該当した選択肢を取得する
        $choises = $questions->choises;
        //question 1件に対してカテゴリーを取得する(small_categoryテーブル)
        $category = $questions->category;
        //少カテゴリー(分野)を取得する
        $all_categories = SmallCategory::all();
        //大カテゴリー(試験名)を取得する
        $large_category = LargeCategory::where('id', $questions->category->large_categories_id)->first();

        return view('contents.edit', compact('questions', 'choises', 'category', 'all_categories', 'large_category'));
    }

    public function update(Request $request, $question_id)
    {
        $questions = Question::find($question_id);
        $user = User::where('id', $questions->user_id)->first();

        $questions->name = $request->input('problem-statement'); //試験名
        $questions->category_id = $request->input('subject-field'); //各分野
        $questions->save();

        $alternatives1 = $request->input('choice1'); //選択肢1
        $alternatives2 = $request->input('choice2'); //選択肢2
        $alternatives3 = $request->input('choice3'); //選択肢3
        $alternatives4 = $request->input('choice4'); //選択肢4

        $alternatives = collect([
            'choice1' => [$alternatives1 => false],
            'choice2' => [$alternatives2 => false],
            'choice3' => [$alternatives3 => false],
            'choice4' => [$alternatives4 => false],
        ]);

        $answers = $request->input('answers'); //答えを配列で格納している

        $altAns = [];
        foreach ($alternatives as $key => $item) { //答えと入力された選択肢を合体させている
            foreach ($item as $key2 => $value) {
                foreach ($answers as $index => $val) {
                    if ($key === $val) {
                        $value = true;
                    }
                    $altAns = array_merge($altAns, array($key => [$key2 => $value])); //値を変更したものを再び連想配列に戻す
                }
            }
        }
        $ids = Choise::where('question_id', $question_id)->pluck('id'); //question_idと合致した問題idを取得

        foreach ($altAns as $key => $value) {
            foreach ($value as $key2 => $val) {
                foreach ($ids as $i => $id) {
                    if ($key === 'choice' . ($i + 1)) {
                        $choise = Choise::where('id', $id)->where('question_id', $question_id)->first();
                        $choise->choise = $key2;
                        $choise->correct_answer = $val;
                        $choise->save();
                    }
                }
            }
        }
        return redirect()->route('users.show', ['name' => $user->name])->with('flash_message', '問題の更新が成功しました');
    }

    /**
     * 問題(Questionsテーブル)と選択肢(Choisesテーブル)から対象を削除する
     */
    public function destroy($question_id)
    {
        $choises = Choise::where('question_id', $question_id)->delete(); //外部キー制約の関係で選択肢から削除する
        $questions = Question::find($question_id);
        $questions->delete();

        return redirect()->route('users.show', ['name' => $questions->user->name])->with('flash_message', '問題の削除が成功しました');
    }


    /**
     * 問題演習画面に遷移するアクションメソッド
     */
    public function exercise(Request $request)
    {

        //チェックボックスでチェックされた値により、questionsテーブルに検索を掛けて、データを取得する


        $smallCategories = $request->input('smallcategories'); //フォーム送信から分野を取得
        $examSubject = $request->input('exam-subject'); //フォーム送信から試験名を取得

        $query = Question::query(); //選択した問題を取得する
        $query->select(
            'questions.id as question_id',
            'questions.name as question_name',
            'users.name as user_name',
        );
        $query->leftJoin('users', 'questions.user_id', '=', 'users.id'); //usersテーブルを外部結合
        $query->leftJoin('small_categories', 'questions.category_id', '=', 'small_categories.id'); //小カテゴリーテーブルを外部結合

        foreach ($smallCategories as $smallcategory) {
            $query->orwhere('questions.category_id', $smallcategory);
        }
        $query->where('large_categories_id', $examSubject)->orderBy('category_id', 'asc');

        $question = $query->get(); //選択した分野の問題を格納


        //得られた各問題から、対応する選択肢を取得していく
        //また、その結果をquestionオブジェクトに挿入する
        foreach ($question as $value) {
            $choice = Choise::where('question_id', $value->question_id)->get();
            $value->choices_ans = $choice;
        }

        return view('contents.exercise', compact('question'));
    }

    public function confirm(Request $request)
    {
        $data = $request->input('select_answer');
        $data = json_decode($data);
        // dd($data);
        foreach ($data as $key => $v) {
            dd($key, $v);
        }

        return view('contents.exercise_confirm', compact('data'));
    }
}
