<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function incorrectAnswer() //ユーザが間違った問題を集計する 多対多
    {
        return $this->belongsToMany(Question::class, 'user_question');
    }

    /**
     * nameに基づいてユーザを検索し、モデル型で値を返す
     * @param $name
     * @return Model 
     */
    public  function get_user($name)
    {
        $users = User::where('name', $name)->first();
        return $users;
    }
}
