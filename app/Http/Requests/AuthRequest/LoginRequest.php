<?php

namespace App\Http\Requests\AuthRequest;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public const PASSWORD = 'password';
    public const EMAIL = 'email';
    public const HASH = 'hash';

    public function rules(): array
    {
        return [
            self::PASSWORD => [
                'required',
                'string',
            ],
            self::EMAIL => [
                'required',
                'string',
            ],
            self::HASH => [
                'nullable',

            ],
        ];
    }

    public function getPassword(): string
    {
        return $this->get(self::PASSWORD);
    }

    public function getEmail(): string
    {
        return $this->get(self::EMAIL);
    }

    public function getHash(): string|null
    {
        return $this->get(self::HASH);
    }

}
