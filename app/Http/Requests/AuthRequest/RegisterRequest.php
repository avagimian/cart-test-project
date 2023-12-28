<?php

namespace App\Http\Requests\AuthRequest;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const PASSWORD = 'password';

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
            self::NAME => [
                'required',
                'string',
            ],
            self::EMAIL => [
                'required',
                'unique:users',
                'string',
            ],

            self::PASSWORD => [
                'required',
                'min:6',
            ],
        ];
    }

    public function getName(): string
    {
        return $this->get(self::NAME);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }
}
