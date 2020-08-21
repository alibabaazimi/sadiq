<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // One level child
    public function child() {
        return $this->hasMany('App\Category', 'parent');
    }

    // Recursive children
    public function children() {
        return $this->hasMany('App\Category', 'parent')->with('children');
    }

    // One level parent
    public function parent() {
        return $this->belongsTo('App\Category', 'parent');
    }

    // Recursive parents
    public function parents() {
        return $this->belongsTo('App\Category', 'parent')->with('parent');
    }
}
