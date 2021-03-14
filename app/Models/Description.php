<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    //relacion 1 a 1 Inersa con Lesson.php
    public function lessons()
    {
        return $this->belongsTo('App\Models\Lesson');
    }
}
