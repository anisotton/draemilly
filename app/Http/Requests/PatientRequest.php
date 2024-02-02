<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'mail' => 'string|mail',
            'date_birth' => 'required|date',
            'phone' => 'required|string|max:20',
            'cpf' => 'required|string|max:14|unique:patients,cpf',
            'address' => 'string',
            'how_find_us' => 'string',
        ];

    }
}
