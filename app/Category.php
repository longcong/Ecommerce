<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
        'timestamps',

    ];
}
