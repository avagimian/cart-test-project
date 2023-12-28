<?php

namespace App\Http\Controllers\ProductController;

use App\Http\Controllers\Controller;
use App\Services\Dto\ProductDto\ProductCreateDto;
use App\Http\Requests\ProductRequest\ProductCreateRequest;
use App\Services\Action\ProductAction\ProductCreateAction;
use App\Http\Resources\ProductResource\ProductCreateResource;

class ProductCreateController extends Controller
{
    public function __invoke(
        ProductCreateRequest $request,
        ProductCreateAction $createProductAction
    ): ProductCreateResource {
        $dto = ProductCreateDto::fromRequest($request);
        $user = $createProductAction->run($dto);

        return new ProductCreateResource($user);
    }
}
