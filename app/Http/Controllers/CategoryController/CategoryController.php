<?php

namespace App\Http\Controllers\CategoryController;

use App\Http\Controllers\Controller;
use App\Services\Dto\CategoryDto\CategoryDto;
use App\Http\Requests\CategoryRequest\CategoryRequest;
use App\Services\Action\CategoryAction\CategoryAction;
use App\Http\Resources\CategoryResource\CategoryResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CategoryController extends Controller
{
    public function __invoke(
        CategoryRequest $request,
        CategoryAction $action
    ): AnonymousResourceCollection {
        $dto = CategoryDto::fromRequest($request);
        $category = $action->run($dto);

        return CategoryResource::collection($category);
    }
}
