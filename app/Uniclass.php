<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Uniclass extends Model
{
    public function enrolls()
    {
        return $this->hasManyThrough('App\Nightenroll', 'App\User', 'uniclass_id','user_id');
    }

    public function department()
    {
        return $this->hasOne('App\Department');
    }

}
