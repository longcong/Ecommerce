<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImportProduct extends Model
{
    protected $table = 'import_products';
    protected $fillable = [
    ];
    public function products()
    {
        return $this -> belongsTo(Product::class,'prod_id','id');
    }
}
