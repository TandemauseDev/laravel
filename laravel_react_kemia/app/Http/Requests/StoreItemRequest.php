<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Cambiado a true para permitir la autorización
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
            'category_id' => 'nullable|integer|exists:categories,id', // Ajusta el nombre de la tabla y columna si es necesario
            'description' => 'nullable|string',
            'size' => 'nullable|string|max:50',
            'img1' => 'nullable|string|max:255',
            'img2' => 'nullable|string|max:255',
            'img3' => 'nullable|string|max:255',
            'precautions' => 'nullable|string',
            'storage' => 'nullable|string',
            'handling' => 'nullable|string',
            'uses' => 'nullable|string', // Campo adicional "uses"
        ];
    }
}
