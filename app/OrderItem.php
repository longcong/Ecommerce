<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table= 'order_detail';
    protected $fillable =[
      'order_id',
      'prod_id',
      'price',
      'qty',
    ];
}
