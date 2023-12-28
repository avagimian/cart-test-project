<?php

namespace App\Services\Dto\ProductDto;

use Spatie\LaravelData\Data;
use App\Http\Requests\ProductRequest\ProductSearchRequest;

class ProductSearchDto extends Data
{
    public string $title;

    public static function fromRequest(ProductSearchRequest $request): ProductSearchDto
    {
        return self::from([
            'title' => $request->getTitle()
        ]);
    }
}
