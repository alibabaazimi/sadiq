<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

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



    public function posts()
    {
        return $this->hasMany('App\Post', 'posted_by');
    }

    public function socialAccounts()
    {
        return $this->hasMany('App\SocialAccount');
    }



    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    public function getAvatarAttribute()
    {
        if (!isset($this->image)) {
            // $this['image'] = ['path'=> ''];
            if ($this->socialAccounts->count()) {
                $avatar = $this->socialAccounts->first()->avatar;
            } else {
                $avatar = asset(env('APP_URL').'/profile-default.jpg');
            }
        }
        return $avatar;
    }

    public function messages()
    {
        return $this->hasMany('App\Message');
    }
}
