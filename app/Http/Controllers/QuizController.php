<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Question;
use App\Models\Choise;
use App\Models\SmallCategory;
use App\Models\LargeCategory;

use App\Services\StoreUpdateQuizData;
use App\Services\ExeExercise;
use App\Services\RandomExeExercise;

use App\Http\Requests\StoreQuizForm;
use App\Http\Requests\ExerciseForm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        $small_category = SmallCategory::all();
        return view('contents.index', compact('small_category')); //問題選択画面へ
    }

    /**
     * 問題を作成するためのフォームに送るメソッド
     */
    public function create()
    {
        $small_categories = SmallCategory::all();
        $large_categories = LargeCategory::all();

        return view('contents.create', compact('small_categories', 'large_categories')); //問題投稿画面へ
    }

    public function store(StoreQuizForm $request) //問題投稿画面で送られてきたパラメータをデータベースに格納する
    {
        StoreUpdateQuizData::store($request);
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
        // $large_category = LargeCategory::where('id', $questions->category->large_categories_id)->first();
        $large_category = LargeCategory::all();

        return view('contents.edit', compact('questions', 'choises', 'category', 'all_categories', 'large_category'));
    }

    /**
     * 編集した問題をデータベースに格納するメソッド
     */
    public function update(Request $request, $question_id)
    {
        $questions = Question::find($question_id);
        $user = User::where('id', $questions->user_id)->first();
        StoreUpdateQuizData::update($request, $question_id);
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
    public function exercise(ExerciseForm $request)
    {
        $randomExercise = $request->input('randomExercise');
        $large_category_id = $request->input('exam-subject');
        $login_user_id = Auth::id();
        isset($randomExercise) ? $question = RandomExeExercise::random($login_user_id, $large_category_id) : $question = ExeExercise::exercise($request);
        return view('contents.exercise', compact('question'));
    }

    /**
     * 問題演習の結果をデータを処理して結果を表示するアクションメソッド
     */
    public function result(Request $request)
    {
        $data = $request->input('select_answer');
        $data = json_decode($data); //JSON形式でデータが入っているのでデコードして配列(Array)に戻す
        $data_arry = (array)$data; //バリデーション用の配列(Array型)

        $validator = Validator::make($data_arry, [ //バリデーション処理
            'questionid*' => ['required'],
            'questionid*.*' => ['required', 'int']
        ]);
        if ($validator->fails()) {
            return redirect()->route('quizzes.index')->withInput()->withErrors($validator);
        }

        $data_collection = collect($data);

        $data_keys = $data_collection->keys();
        $data_keys = preg_replace("/[a-z]/", "", $data_keys); //[question_id]部分を取り除く
        $data_keys = preg_replace("/\[|\]/", "", $data_keys);
        $data_keys = preg_replace("/\"/", "", $data_keys);
        $data_keys = preg_split('/,/', $data_keys); //question_idを数値に変換したものを再び配列に戻している

        $data_values = $data_collection->values()->toArray();

        //questionid(Key値)を数値に変換したものを再びquestion_idと回答に統合
        $data_answer = collect(array_combine($data_keys, $data_values));

        //全問題数
        $data_question_total = $data_answer->count();

        $correct = 0; //正解数
        $discorrect = 0; //不正解数

        //データベースと回答を参照して正誤率を計算する
        foreach ($data_answer as $key => $value) {
            $choises = Choise::select('correct_answer')->where('question_id', $key)->get(); //question_idに基づいてDBから解答を取得する
            $choises_ans = $choises->where('correct_answer', '1')->count(); //その問題の正解数
            $value_ans = array_count_values($value);

            $select_ans = 0; //回答を選択し、合っていたときにカウントする
            foreach ($value_ans as $k => $v) {
                $k === 1 && $select_ans = $v;
            }

            $incorrectAns = User::find(Auth::id()); //間違った問題に対して格納するユーザを特定する

            //不正解を集計して、間違えた問題として、テーブルに保存する
            if (in_array("0", $value) || ($select_ans !== $choises_ans)) { //ユーザ回答に0(不正解)またはユーザ回答の正解数が足りない場合
                $discorrect++;
                $incorrectAns->incorrectAnswers()->syncWithoutDetaching($key); //完全重複しない限りでは、中間テーブルにデータを挿入していく
            } else { //正解した場合
                $correct++;
                //問題IDで間違いテーブルの中身を検索して、該当のデータを解除する
                $incorrectAns->incorrectAnswers->where('question_id', $key) ? $incorrectAns->incorrectAnswers()->detach($key) : '';
            }
        }
        return view('contents.exercise_result', compact('data_question_total', 'correct', 'discorrect'));
    }
}
