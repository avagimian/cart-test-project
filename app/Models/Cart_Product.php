<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Cart_Product extends Model
{
    use HasFactory;

    protected $table = 'products_carts';
    protected $fillable = ['product_id', 'cart_id'];
}
