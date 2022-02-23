<?php

namespace App\Services;

use App\Models\Question;
use App\Models\Choise;

class ExeExercise
{
    public static function exercise($request)
    {
        //チェックボックスでチェックされた値により、questionsテーブルに検索を掛けて、データを取得する

        $smallCategories = $request->input('smallcategories'); //フォーム送信から分野を取得
        $examSubject = $request->input('exam-subject'); //フォーム送信から試験名を取得
        $displayNum = $request->input('DisplayedNum');

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

        //選択した分野の問題を格納
        (!isset($displayNum)) ? $question = $query->get() : $question = $query->inRandomOrder()->take($displayNum)->get();

        //得られた各問題から、対応する選択肢を取得していく
        //また、その結果をquestionオブジェクトに挿入する
        foreach ($question as $value) {
            $choice = Choise::where('question_id', $value->question_id)->get();
            $value->choices_ans = $choice;
        }
        return $question;
    }
}
