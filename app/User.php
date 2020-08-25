<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // define RELATIONSHIP manytomany -> POSTs (jo)
    // second argument in belongsToMany() is the name of the intermediary table
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'likes');
    }
    public function postsReports()
    {
        return $this->belongsToMany('App\Post', 'reports', 'user_id', 'post_id')->withTimestamps();
    }
}
