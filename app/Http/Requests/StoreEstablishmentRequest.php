<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreEstablishmentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'address' => [
                'required',
                'string',
                'max:255'
            ],
            'latitude' => [
                'required', 
                'numeric', 
                'between:14,33'
            ],
            'longitude' => [
                'required', 
                'numeric', 
                'between:-118,-86'
            ],
            'description' => [
                'nullable',
                'string',
                'max:255'
            ],
            'business_hours' => [
                'nullable',
                'string',
                'max:255'
            ],
            'phone' => [
                'nullable',
                'string',
                'max:255'
            ],
            'is_visible' => [
                'required',
                'boolean'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del establecimiento es obligatorio.',
            'address.required' => 'La dirección es obligatoria.',
        ];
    }
}
