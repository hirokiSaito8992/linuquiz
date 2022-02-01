<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmallCategory extends Model
{
    protected $table = 'small_categories';

    public function large_category()
    {
        return $this->hasMany(LargeCategory::class);
    }
}
