<?php

namespace App\Services;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Question;
use App\Models\Choise;
use App\Models\SmallCategory;
use App\Models\LargeCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreQuizForm;
use App\Http\Requests\ExerciseForm;
use Illuminate\Support\Facades\Auth;

class RandomExeExercise
{
    public static function random($user_id)
    {
        //ログイン中のユーザIDを元にデータベースにアクセスを行い、そのユーザが間違ったものだけを取得する

        $question = Question::where('user_id', $user_id)->get();
        foreach ($question as $value) {
            $a = $value->incorrectAnswer();
            dd($a);
        }
    }
}
