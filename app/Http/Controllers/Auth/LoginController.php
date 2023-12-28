<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Dto\AuthDto\LoginDto;
use App\Http\Requests\AuthRequest\LoginRequest;
use App\Services\Action\AuthAction\LoginAction;
use App\Http\Resources\AuthResource\LoginResource;

class LoginController extends Controller
{
    public function __invoke(
        LoginRequest $request,
        LoginAction $loginAction
    ): LoginResource {
        $dto = LoginDto::fromRequest($request);
        $result = $loginAction->run($dto);

        return new LoginResource($result);
    }
}
