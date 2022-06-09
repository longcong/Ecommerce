<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table= 'order';
    protected $fillable =[
        'user_id',
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
    
    public function orderDetail()
    {
        return $this ->hasMany(OrderItem::class);
    }

}
