<?php

namespace App\Http\Resources\AuthResource;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResource extends JsonResource
{
    public int $id;
    public string $name;
    public string $email;


    public function toArray($request): array
    {
        return [
            'success' => true,
            'message' => 'You have registered successfully!',
            'user' => [
                'name' => $request->name,
                'email' => $request->email,

            ],
        ];
    }
}
