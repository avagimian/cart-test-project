<?php

namespace App\Http\Resources\CategoryResource;

use App\Http\Resources\ProductResource\ProductSearchResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'title' => $this->resource->title,
            'products' => ProductSearchResource::collection($this->resource->products),
        ];
    }
}
