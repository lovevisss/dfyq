<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    public function users()
    {
        return $this->belongsToMany('App/User');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
