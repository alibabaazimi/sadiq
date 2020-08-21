<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Post extends Model
{
    //
    public function user() {
        return $this->belongsTo('App\User', 'posted_by');
    }

    public function unit() {
        return $this->belongsTo('App\Unit');
    }

    public function image() {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function likes()
    {
        return $this->belongsToMany('App\User', 'post_like');
    }
}
