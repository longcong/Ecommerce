<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'user_id',
        'prod_id',
        'prod_qty',
        'product_size',
        'product_color'
    ];

    public function products()
    {
        return $this -> belongsTo(Product::class,'prod_id','id');
    }
    public function coupons(){
        return $this->belongsTo(Coupon::class,'user_id','id');
    }
}
