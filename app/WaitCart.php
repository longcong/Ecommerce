<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WaitCart extends Model
{
    protected $table= 'wait_carts';
    protected $fillable =[
        'order_id',
        'product_id',
        'price',
        'quantity',
        'status',
    ];
    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id','id');
    }
}
