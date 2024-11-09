<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
            'name' => 'sometimes|required|string|max:255',
            'category_id' => 'sometimes|nullable|integer|exists:categories,id', // Ajusta el nombre de la tabla y columna si es necesario
            'description' => 'sometimes|nullable|string',
            'size' => 'sometimes|nullable|string|max:50',
            'img1' => 'sometimes|nullable|string|max:255',
            'img2' => 'sometimes|nullable|string|max:255',
            'img3' => 'sometimes|nullable|string|max:255',
            'precautions' => 'sometimes|nullable|string',
            'storage' => 'sometimes|nullable|string',
            'handling' => 'sometimes|nullable|string',
            'uses' => 'sometimes|nullable|string', // Campo adicional "uses"
        ];
    }
}
