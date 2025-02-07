<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function brand(){
        return $this->belongsTo('App\Brands');
    } 
}
