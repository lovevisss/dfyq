<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Nightenroll extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}