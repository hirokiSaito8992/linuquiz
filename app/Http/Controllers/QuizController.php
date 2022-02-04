<?php

namespace App\Http\Controllers;

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
        return view('contents.create'); //問題投稿画面へ
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
        dd($question_id, $request);
    }
}
