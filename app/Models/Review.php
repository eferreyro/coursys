<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //relacion 1 a muchos inversa con User.php 
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    //relacion 1 a muchos inversa con User.php 
    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }
    
}
