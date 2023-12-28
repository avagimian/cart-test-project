<?php

namespace App\Services\Action\AuthAction;

use App\Models\User;
use App\Services\Dto\AuthDto\RegisterDto;

class RegisterAction
{
    public function run(RegisterDto $dto): object
    {
        return User::query()->create($dto->toArray());
    }
}
