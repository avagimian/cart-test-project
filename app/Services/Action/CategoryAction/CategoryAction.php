<?php

namespace App\Services\Action\CategoryAction;

use App\Models\Category;
use App\Services\Dto\CategoryDto\CategoryDto;

class CategoryAction
{
    public function run(CategoryDto $dto): object
    {
        return Category::query()->where('title', $dto->category)->with('products')->get();
    }
}
