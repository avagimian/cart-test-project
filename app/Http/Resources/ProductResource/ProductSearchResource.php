<?php

namespace App\Http\Resources\ProductResource;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductSearchResource extends JsonResource
{

    /**
     * @throws \Exception
     */
    public function toArray(Request $request): array
    {
        $data = $this->resource;

        return [
            'id' => $data->id,
            'title' => $data->title,
            'price' => $data->price,
            'category_id' => $data->user_id,
        ];
    }
}
