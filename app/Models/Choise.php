<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Choise extends Model
{
    protected $table = 'choises';
    protected $fillable = ['choise', 'corrent_answer', 'question_id'];


    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
