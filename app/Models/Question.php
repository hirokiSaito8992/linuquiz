<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['id', 'name', 'user_id', 'category_id'];

    public function choises()
    {
        return $this->hasMany(Choise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(SmallCategory::class);
    }

    public function incorrectAnswers() //ユーザが間違った問題を集計する 多対多
    {
        return $this->belongsToMany(User::class, 'user_question', 'user_id', 'question-id')->withPivot('user_id', 'question_id')->withTimeStamps();
    }
}
