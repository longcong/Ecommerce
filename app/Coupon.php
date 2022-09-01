<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{

    protected $table= 'coupons';
    protected $fillable =[
        'title',
        'description',
        'type',
        'seller_id',
        'code',
        'quantity',
        'discount_coup',
        'discount_type',
        'is_active',
        'start_date',
        'expiry_date',
        
    ];
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function orders(){
        return $this->belongsTo('App\Orders');
    }
    public function coupon_user()
    {
        return $this -> hasMany(CouponUser::class);
    }
}

