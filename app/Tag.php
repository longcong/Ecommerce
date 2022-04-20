<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function posts(){
        return $this->belongsToMany('App\Post');
    }
    public function product(){
        return $this->belongsToMany('App\Product');
    }
}
