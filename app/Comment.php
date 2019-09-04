<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Presenters\DatePresenter;

class Comment extends Model

    {

        protected $fillable = ['body', 'user_id', 'post_id', 'gif'];

        public function post()
        {
            return $this->belongsTo('App\User');
        }
        public function posts()
        {
            return $this->belongsTo('App\Post');
        }
        public function user() {

            return $this ->belongsTo('App\User');
        }
    }
