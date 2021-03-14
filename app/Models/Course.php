<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'status'];


    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;
/* ====================
RELACIONES UNO A MUCHOS
=======================*/
    //relacion 1 a muchos inversa con Review.php 
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    //relacion 1 a muchos inversa con Requirement.php 
    public function requirements()
    {
        return $this->hasMany('App\Models\Requirements');
    }
    //relacion 1 a muchos inversa con Goal.php 
    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }
    //relacion 1 a muchos inversa con Audience.php 
    public function audience()
    {
        return $this->hasMany('App\Models\Audience');
    }

    //relacion 1 a muchos inversa con Section.php 
    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    /* ====================
    RELACIONES UNO A MUCHOS INVERSAS
    =======================*/
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
    /* ====================
    RELACIONES MUCHOS A MUCHOS
    =======================*/
    //relacion muchos a muchos con User.pgp (student)
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }


    /* ====================
    RELACIONES UNO A UNO POLIMORFICA
    =======================*/
    //relacion muchos a muchos con Image.php 
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'immgeable');
    }

    /* ====================
    RELACIONES HAS MANY TROUGH
    =======================*/
    //relacion muchos a muchos de Secciones con Lecciones 
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }

}
