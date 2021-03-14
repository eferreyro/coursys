<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    /*===============================
            RELACION 1 a 1
    ================================= */
    //Relacion 1 a 1 con Profile.php
    public function profile()
    {
        return $this->hasOne('App\Models\Profile');
    }

    /*===============================
            RELACION 1 a Muchos
    ================================= */
    //Relacion 1 a muchos con Course.php
    public function courses_dictated()
    {
        return $this->hasMany('App\Models\Course');
    }

    //Relacion 1 a muchos con Review.php
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    //Relacion 1 a muchos con Comment.php
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
    //Relacion 1 a muchos con Reaction.php
    public function reactions()
    {
        return $this->hasMany('App\Models\Reaction');
    }

    /*===============================
            RELACION Muchos a Muchos
    ================================= */
    //Relacion muchos a muchos con Course.php
    public function courses_enrolled()
    {
        return $this->belongsToMany('App\Models\Course');
    }
    //Relacion muchos a muchos con Course.php
    public function lessons()
    {
        return $this->belongsToMany('App\Models\Lesson');
    }
}
