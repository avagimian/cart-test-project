<?php

namespace App\Services\Action\ProductAction;

use App\Models\Product;
use App\Services\Dto\ProductDto\ProductCreateDto;

class ProductCreateAction
{
    public function run(ProductCreateDto $dto): object
    {
        return Product::query()->create($dto->toArray());
    }
}
