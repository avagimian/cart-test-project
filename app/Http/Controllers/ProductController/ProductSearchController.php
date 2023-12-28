<?php

namespace App\Http\Controllers\ProductController;

use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Exceptions\ProductNotFoundException;
use App\Services\Dto\ProductDto\ProductSearchDto;
use App\Http\Requests\ProductRequest\ProductSearchRequest;
use App\Services\Action\ProductAction\ProductSearchAction;
use App\Http\Resources\ProductResource\ProductSearchResource;


class ProductSearchController extends Controller
{
    public function __invoke(
        ProductSearchRequest $request,
        ProductSearchAction $searchAction
    ): ProductSearchResource|JsonResponse {
        try {
            $dto = ProductSearchDto::fromRequest($request);
            $product = $searchAction->run($dto);

            return new ProductSearchResource($product);
        } catch (ProductNotFoundException $e) {
            return response()->json(['error' => $e->getMessage()], 404);
        }
    }
}
