<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    //relacion 1 a muchos con Lesson.php
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
