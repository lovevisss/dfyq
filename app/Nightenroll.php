<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Nightenroll extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function members(){
        return $this->belongsToMany('App\User');
    }

    public function scopeLatest($query)  //使用latest() 按id递增排序
    {
        return $query->orderBy('id', 'asc')->get();
    }

}
