<?php

namespace App\Models\Chuo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Shop extends Model
{
    use SoftDeletes;


    /**
     * Get the category that owns the product.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get the category that owns the product.
     */
    public function products()
    {
        return $this->hasMany('App\Models\Chuo\Product');
    }
}
