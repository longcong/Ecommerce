<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table= 'coupon';
    protected $fillable =[
        
    ];
    public function users(){
        return $this->belongsToMany('App\User');
    }
}

