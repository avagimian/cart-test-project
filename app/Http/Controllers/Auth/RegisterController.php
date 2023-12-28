<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Services\Dto\AuthDto\RegisterDto;
use App\Http\Requests\AuthRequest\RegisterRequest;
use App\Services\Action\AuthAction\RegisterAction;
use App\Http\Resources\AuthResource\RegisterResource;

class RegisterController extends Controller
{
    public function __invoke(
        RegisterRequest $request,
        RegisterAction $registerAction
    ): RegisterResource {
        $dto = RegisterDto::fromRequest($request);
        $user = $registerAction->run($dto);

        return new RegisterResource($user);
    }
}
