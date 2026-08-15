<?php

namespace App\Http\Requests;

use App\Enums\PublicationStatus;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePublicationRequest extends FormRequest
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
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'summary' => [
                'required',
                'string',
            ],
            'content' => [
                'required',
                'string',
            ],
            'cover_image' => [
                'required',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
            'category_id' => [
                'required',
                'integer',
                'exists:categories,id',
            ],
            'status' => [
                'required',
                Rule::enum(PublicationStatus::class),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'El título es obligatorio.',
            'title.max' => 'El título no puede superar 255 caracteres',
            'summary.required' => 'El resumen es obligatorio.',
            'content.required' => 'El contenido es obligatorio.',
            'cover_image.required' => 'La imagen de portada es obligatoria.',
            'cover_image.image' => 'El archivo debe ser una imagen válida.',
            'cover_image.mimes' => 'La imagen debe ser JPG, PNG o WebP.',
            'cover_image.max' => 'La imagen no puede pesar más de 10 MB.',
            'category_id.required' => 'Selecciona una categoría.',
            'category_id.exists' => 'La categoría seleccionada no existe.',
            'status.required' => 'Selecciona un estado.',
            'status.enum' => 'El estado seleccionado no es válido.'
        ];
    }
}
