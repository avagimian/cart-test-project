<?php

namespace App\Services\Dto\CartDto;

use Spatie\LaravelData\Data;
use App\Http\Requests\CartRequest\CartRequest;

class CartDto extends Data
{
    public int $product_id;

    public static function fromRequest(CartRequest $request): CartDto
    {
        return self::from([
            'product_id' => $request->getProductId(),
        ]);
    }
}
