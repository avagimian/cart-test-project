<?php

namespace App\Services\Action\ProductAction;

use App\Models\Product;
use App\Exceptions\ProductNotFoundException;
use App\Services\Dto\ProductDto\ProductSearchDto;

class ProductSearchAction
{
    public function run(ProductSearchDto $dto): object
    {
        $products = Product::query()->where('title', $dto->title)->first();

        if (empty($products)) {
            throw new ProductNotFoundException('Product not found');
        } else {
            return $products;
        }
    }
}
