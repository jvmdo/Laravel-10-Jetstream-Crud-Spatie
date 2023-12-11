<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UssProviderUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:uss_providers'],
            'cnpj' => ['required', 'string', 'regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/', 'unique:uss_providers'],
            'drones' => ['required', 'integer'],
        ];
    }
}
