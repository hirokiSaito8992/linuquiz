<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';

    protected $fillable = [
        'id',
        'name',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class, 'user_id', 'id');
    }

    public function incorrectAnswers() //ユーザが間違った問題を集計する 多対多
    {
        return $this->belongsToMany(Question::class, 'user_question');
    }

    /**
     * nameに基づいてユーザを検索し、モデル型で値を返す
     * @param $name
     * @return Model インスタンス
     */
    public  function get_user($name)
    {
        $users = User::where('name', $name)->first();
        return $users;
    }
}
