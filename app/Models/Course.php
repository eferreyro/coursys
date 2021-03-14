<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    //relacion 1 a muchos inversa con Review.php 
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    //relacion 1 a muchos inversa con User.pgp (teacher)
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //relacion 1 a muchos inversa con Level.php 
    public function level()
    {
        return $this->hasMany('App\Models\Level');
    }
    //relacion 1 a muchos inversa con Category.php 
    public function category()
    {
        return $this->hasMany('App\Models\Category');
    }
    //relacion 1 a muchos inversa con Price.php 
    public function price()
    {
        return $this->hasMany('App\Models\Price');
    }

    //relacion muchos a muchos con User.pgp (student)
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


}
