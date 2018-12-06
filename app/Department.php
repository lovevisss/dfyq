<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Department extends Model
{

    public function majors()
    {
        return $this->hasMany('App\Major');
    }

}
