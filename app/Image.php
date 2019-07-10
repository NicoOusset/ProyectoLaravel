<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //relacion One to Many
    public function comments(){
        return $this->hasMany('App\Comment');
    }

    //relacion One to Many
    public function likes(){
        return $this->hasMany('App\Like');
    }

    //relacion Many to One
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }



}
