<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    public function recipient()
    {
        return $this->belongsTo('App\User', 'receiver_user_id');
    }

    public function sender()
    {
        return $this->belongsTo('App\User', 'sender_user_id');
    }

    public function scopeInbox($query)
    {
        return $query->where('receiver_user_id', '=', auth()->user()->id)->get();
    }

    public function scopeSent($query)
    {
        return $query->where('sender_user_id', '=', auth()->user()->id)->get();
    }

}
