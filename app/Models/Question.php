<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable = ['name', 'user_id', 'category_id'];

    public function choise()
    {
        return $this->hasMany(Choise::class);
    }
}
