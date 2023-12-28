<?php

namespace App\Services\Dto\CategoryDto;

use Spatie\LaravelData\Data;
use App\Http\Requests\CategoryRequest\CategoryRequest;

class CategoryDto extends Data
{
    public string $category;

    public static function fromRequest(CategoryRequest $request): CategoryDto
    {
        return self::from([
            'category' => $request->getCategory()
        ]);
    }
}
