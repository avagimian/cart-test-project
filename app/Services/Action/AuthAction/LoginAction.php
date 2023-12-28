<?php

namespace App\Services\Action\AuthAction;

use App\Models\Cart;
use App\Models\User;
use Mockery\Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Services\Dto\AuthDto\LoginDto;

class LoginAction
{
    public function run(LoginDto $dto): array
    {
        $hash = Str::random(10);
        $user = User::query()->where('email', $dto->email)->first();
        $cart = Cart::query()->where('Hash', $dto->hash)->first();
        if (!empty($cart)) {
            $cart->update(['user_id' => $user->id]);
        } else {
            throw new Exception('Hash is wrong');
        }
        if ($user) {
            if (Hash::check($dto->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['token' => $token];
            } else {
                $response = ["message" => "Password is wrong"];
            }

            return $response;
        }

        return [$hash, $cart];
    }

}
