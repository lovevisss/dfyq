<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function users()
    {
        return $this->morphedByMany('App\User', 'taggable');
    }

    public function products()
    {
        return $this->morphedByMany('App\Product', 'taggable');
    }
}
