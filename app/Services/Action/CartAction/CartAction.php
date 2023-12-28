<?php

namespace App\Services\Action\CartAction;

use App\Models\Cart;
use Illuminate\Support\Str;
use App\Models\Cart_Product;
use App\Services\Dto\CartDto\CartDto;

class CartAction
{
    public function run(CartDto $dto): object
    {
        $hash = Str::random(10);

        $cart = Cart::create([
            'Hash' => $hash,
        ]);
        $cart_product = Cart_Product::create([
            'product_id' => $dto->product_id,
            'cart_id' => $cart->id
        ]);

        $cart_product->save();
        $cart->save();

        return $cart;
    }
}

