<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Cart extends Model
{
    protected $table = 'cart';
    protected $guarded = [];
    public function product()
    {
        return $this->hasOne(Products::class, 'id', 'product_id');
    }
}
