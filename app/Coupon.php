<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $table= 'coupons';
   
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function orders(){
        return $this->belongsTo('App\Orders');
    }
}

