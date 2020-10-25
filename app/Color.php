<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //
    protected $touches = ['post'];

    public function post()
    {
        return $this->belongsToMany(App\Post::class, 'post_colors', 'post_id', 'color_id')->withTimestamps();
        ;
    }
}
