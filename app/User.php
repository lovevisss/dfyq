<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'student_num', 'role_id', 'phone', 'uniclasses_id','student_card'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }

    public function getStudentCardAttribute($value)
    {
        return env('APP_URL').$value;
    }

    public function nightenrolls()
    {
        return $this->belongsToMany('App\Nightenroll');
    }

    public function UNIclass()
    {
        return $this->hasOne('App\Uniclass');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
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
