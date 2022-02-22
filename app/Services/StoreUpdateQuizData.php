<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Choise;

class StoreUpdateQuizData
{
    public static function store($request)
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
                ($key === $ans) && $choise->correct_answer = true;
            }
            $choise->save();
        }
    }
    public static function update($request, $question_id)
    {
        $questions = Question::find($question_id);
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
                    ($key === $val) && $value = true;
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
    }
}
