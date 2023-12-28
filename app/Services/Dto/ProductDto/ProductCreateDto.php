<?php

namespace App\Services\Dto\ProductDto;

use Spatie\LaravelData\Data;
use App\Http\Requests\ProductRequest\ProductCreateRequest;

class ProductCreateDto extends Data
{
    public string $title;
    public int $price;
    public int $user_id;
    public int $category_id;

    public static function fromRequest(ProductCreateRequest $request): ProductCreateDto
    {
        return self::from([
            'title' => $request->getTitle(),
            'price' => $request->getPrice(),
            'user_id' => $request->getUserId(),
            'category_id' => $request->getCategoryId(),
        ]);
    }
}
