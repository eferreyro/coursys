<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    use HasFactory;
    protected $guarded = ['id'];
   

    public function commentable(){
        return $this->morphTo();
    }
    //Relacion uno a muchos inversa con User.php

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //Realcion 1 a Muchos polimorfica con Comments
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

      //Realcion 1 a Muchos polimorfica con Reactions
    public function reactions()
    { 
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}