<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Overtrue\LaravelFollow\Traits\CanFollow;
use Overtrue\LaravelFollow\Traits\CanBeFollowed;

class User extends Authenticatable
{

    use Notifiable,CanFollow,CanBeFollowed;


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


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        public function profile()
        {
            return $this->hasOne('App\Profile');
        }
        public function likes()
        {
            return $this->hasMany('App\Like');
        }
        public function posts()
        {
            return $this->hasMany('App\Post')->orderBy('created_at', 'DESC');
        }
        public function comments()
        {
            return $this->hasMany('App\Comment');
        }

    }
