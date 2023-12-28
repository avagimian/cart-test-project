<?php

namespace App\Http\Resources\AuthResource;

use Illuminate\Http\Resources\Json\JsonResource;

class LoginResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray($request): array
    {
        return [
            'success' => true,
            'token' => $this->resource,
        ];
    }
}
