<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; 
    protected $fillable =[
        'name',
        'slug',
        'description',
        'status',
    ];
    
    public function products() {
        return $this->hasMany('App\Product');
    }
    public function productdetail() {
        return $this->hasMany('App\ProductDetail');
    }
    public function shops() {
        return $this->hasMany('App\Shop');
    }
}
