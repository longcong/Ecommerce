<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CouponUser extends Model
{
    protected $table = 'coupon_user';
    protected $fillable = [
        'user_id',
        'coupon_id',
        'qty_cou',
    ];
    public function carts(): BelongsTo
    {
        return $this->belongsTo(Cart::class,'user_id','id');
    }
}
