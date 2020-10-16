<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'posted_by');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
    public function color()
    {
        return $this->belongsTo('App\Color', 'available_colors');
    }
    public function dealType()
    {
        return $this->belongsTo('App\DealType', 'deal_type');
    }
    public function deviceBrand()
    {
        return $this->belongsTo('App\DeviceBrand', 'device_brand');
    }
    public function deviceProcessor()
    {
        return $this->belongsTo('App\DeviceProcessor', 'device_processor');
    }

    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function likes()
    {
        return $this->belongsToMany('App\User', 'post_like')->withPivot('user_id', 'post_id');
    }

    public function user_liked()
    {
        return $this->belongsToMany('App\User', 'post_like')->wherePivot('user_id', auth()->user()->id);
    }
}
