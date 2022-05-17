<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = 'products';
    protected $fillable =[
        
    ];
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    } 
    // public function cart(){
    //     return $this->belongsTo(Product::class,'prod_id','id');
    // }

}
