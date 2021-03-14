<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //relacion 1 a muchos inversa con Course.php
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

}
