<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $hidden =([
        'contact_country',
        'contact_email',
        'contact_address',
        'contact_city',
        'contact_email',
        'contact_location_type',
        'contact_map_lat',
        'contact_map_lng',
        'contact_map_zoom',
        'contact_phone',
        'contact_phone_visibility',
    ]);
    //
    public function user()
    {
        return $this->belongsTo('App\User', 'posted_by');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }
    public function colors()
    {
        return $this->belongsToMany('App\Color', 'post_colors', 'post_id', 'color_id')->withTimestamps();
    }
    public function dealType()
    {
        return $this->belongsTo('App\DealType', 'deal_type');
    }
    public function deviceBrand()
    {
        return $this->belongsTo('App\DeviceBrand', 'device_brand');
    }
    public function pcType()
    {
        return $this->belongsTo('App\PcType', 'device_pc_type');
    }
    public function deviceProcessor()
    {
        return $this->belongsTo('App\DeviceProcessor', 'device_processor');
    }
    public function carBrand()
    {
        return $this->belongsTo('App\CarBrand', 'car_brand');
    }
    public function carHand()
    {
        return $this->belongsTo('App\CarHand', 'car_hand');
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
