<?php

namespace App\Http\Requests;

use App\Enums\ReportType;
use App\Enums\ReportUrgency;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreReportRequest extends FormRequest
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
            'type' => ['required', Rule::enum(ReportType::class)],
            'description' => ['required', 'string', 'min:20', 'max:5000'],
            'urgency' => ['required', Rule::enum(ReportUrgency::class)],
            'street_address' => ['required', 'string', 'max:255'],
            'address_reference' => ['nullable', 'string', 'max:255'],
            'latitude' => ['required', 'numeric', 'between:14,33'],
            'longitude' => ['required', 'numeric', 'between:-118,-86'],
            'images' => ['nullable', 'array', 'max:6'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],

        ];
    }

    public function messages(): array
    {
        return [
            'type.required' => 'El tipo de situación es obligatorio.',
            'urgency.required' => 'El nivel de urgencia es obligatorio.',
            'street_address.required' => 'La dirección es obligatoria.',
            'description.required' => 'La descripción es obligatoria.',
            'description.min' => 'La descripción debe contener mínimo 20 caracteres.',
            'images.max' => 'Solo se aceptan 6 imágenes máximo.',
            'status.enum' => 'El estado seleccionado no es válido.'
        ];
    }
}
