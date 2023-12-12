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
        // Should refactor to guarantee unique [email] and [cnpj] on update
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'cnpj' => ['required', 'string', 'regex:/^\d{2}\.\d{3}\.\d{3}\/\d{4}\-\d{2}$/'],
            'drones' => ['required', 'integer'],
        ];
    }
}
