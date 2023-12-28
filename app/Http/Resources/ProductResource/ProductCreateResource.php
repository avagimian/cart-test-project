<?php

namespace App\Http\Resources\ProductResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductCreateResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'price' => $this->resource->price,
            'user_id' => $this->resource->user_id,
            'product_id' => $this->resource->product_id,
        ];
    }
}
