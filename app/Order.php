<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'orders';
    protected $fillable =[
        'fname',
        'lname',
        'cname',
        'city',
        'state',
        'address1',
        'address2',
        'email',
        'phone',
        'zipcode',
        'note',
        'status',
        'message',
        'tracking_no',
    ];
}
