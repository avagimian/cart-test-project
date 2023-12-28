<?php

namespace App\Http\Controllers\CartController;

use App\Http\Controllers\Controller;
use App\Services\Dto\CartDto\CartDto;
use App\Http\Requests\CartRequest\CartRequest;
use App\Services\Action\CartAction\CartAction;
use App\Http\Resources\CartResource\CartResource;

class CartController extends Controller
{
    public function __invoke(
        CartRequest $request,
        CartAction $cartAction
    ): CartResource {
        $dto = CartDto::fromRequest($request);
        $user = $cartAction->run($dto);

        return new CartResource($user);
    }
}
