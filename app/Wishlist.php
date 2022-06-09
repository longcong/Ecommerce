<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlists';
    protected $fillable = [
        'user_id',
        'prod_id',
    ];
    
    public function products()
    {
        return $this -> belongsTo(Product::class,'prod_id','id');
    }
}
