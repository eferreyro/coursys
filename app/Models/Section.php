<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    //relacion 1 a muchos con Lesson.php
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
    //relacion 1 a muchos inversa con Course.php
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }


}
