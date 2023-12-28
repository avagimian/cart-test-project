<?php

namespace App\Http\Requests\ProductRequest;

use Illuminate\Foundation\Http\FormRequest;

class ProductSearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public const TITLE = 'title';

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            self::TITLE => [
                'required',
                'string',
            ]
        ];
    }

    public function getTitle(): string
    {
        return $this->get(self::TITLE);
    }

}
