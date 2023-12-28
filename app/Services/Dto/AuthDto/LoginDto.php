<?php

namespace App\Services\Dto\AuthDto;

use Spatie\LaravelData\Data;
use App\Http\Requests\AuthRequest\LoginRequest;

class LoginDto extends Data
{
    public string $email;
    public string $password;
    public ?string $hash;


    public static function fromRequest(LoginRequest $request): LoginDto
    {
        return self::from([
                'email' => $request->getEmail(),
                'password' => $request->getPassword(),
                'hash' => $request->getHash()
            ]
        );
    }
}
