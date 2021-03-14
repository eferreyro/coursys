<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    //relacion 1 a 1 con Description.php
    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    //relacion 1 a muchos inversa con Section.php
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }
    //relacion 1 a muchos inversa con Platform.php
    public function platforms()
    {
        return $this->belongsTo('App\Models\Platform');
    }
    //relacion muchos a muchos inversa con User.php
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
