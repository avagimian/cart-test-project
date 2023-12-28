<?php

namespace App\Http\Requests\CartRequest;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public const PRODUCT_ID = 'product_id';

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            self::PRODUCT_ID => [
                'required',
                'int',
            ]
        ];
    }

    public function getProductId(): string
    {
        return $this->get(self::PRODUCT_ID);
    }
}
