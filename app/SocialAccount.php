<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    //
    protected $fillable = ['provider', 'user_id', 'provider_user_id', 'avatar'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
