<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $fillable = ['body'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }

    public function getLikedByUserAttribute()
    {
        $id = Auth::id();
        $like = $this->likes->first(function ($row) use ($id) {
            return $row->user_id === $id;
        });

        if($like) return true;
        return false;
    }

    public function getBelongsToUserAttribute()
    {
        return $this->user_id === Auth::id();
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
