<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class NightEnroll extends Model
{
    public function user(){
        $this->belongsTo('App\User');
    }
}
