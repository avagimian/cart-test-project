<?php

namespace App\Http\Resources\CartResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array
     */

    public function toArray(Request $request): array
    {
        return [
            'cart_id' => $this->resource->id,
            'Hash' => $this->resource->Hash,
        ];
    }
}
