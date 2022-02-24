<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Choise;
use Illuminate\Support\Facades\DB;

class RandomExeExercise
{
    /**
     * ログイン中のユーザが間違った問題を中間テーブルを利用して、データを取得してくる
     */
    public static function random($user_id)
    {
        //間違った問題のIDを取得してくる(ランダムで10件固定)
        $incorrectAns = DB::table('user_question')
            ->select('user_question.question_id as question_id')
            ->where('user_id', $user_id)
            ->inRandomOrder()
            ->take(10)
            ->get();

        $ques_choise = array(); //foreachでループしているので、配列で末尾に追加していっている
        foreach ($incorrectAns as $value) {
            $query = Question::leftJoin('users', 'questions.user_id', '=', 'users.id')
                ->select(
                    'questions.id as question_id',
                    'questions.name as question_name',
                    'users.name as user_name',
                )
                ->where('questions.id', $value->question_id)
                ->get();
            array_push($ques_choise, $query);
        }

        //問題に対応した選択肢を取得して格納したデータに追加している
        foreach ($ques_choise as $val) {
            foreach ($val as $k => $v) {
                $choice = Choise::where('question_id', $v->question_id)->get();
                $v->choices_ans = $choice;
            }
        }

        $result = array(); //最終的なデータを格納する(コレクション型)
        foreach ($ques_choise as $k2 => $v2) {
            foreach ($v2 as $k3 => $v3) {
                $result = array_merge($result, [$k3 => $v3]);
            }
        }
        return $result;
    }
}
