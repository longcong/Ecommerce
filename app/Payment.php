<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable =[
        'partnerCode',
        'order_id',
        'request_id',
        'amount',
        'order_info',
        'order_type',
        'trans_id',
        'pay_type',
    ];
}
