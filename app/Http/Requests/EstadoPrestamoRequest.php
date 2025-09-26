<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstadoPrestamoRequest extends FormRequest
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
            'nombre'      => 'required|string|max:100|min:3|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
            'descripcion' => 'required|string|max:255|min:5'
        ];
    }
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del estado prestamo  es obligatorio.',
            'nombre.string'   => 'El nombre debe ser una cadena de texto.',
            'nombre.min'      => 'El nombre debe tener al menos 3 caracteres.',
            'nombre.max'      => 'El nombre no debe superar los 100 caracteres.',

            'descripcion.required' => 'La descripción es obligatoria.',
            'descripcion.string'   => 'La descripción debe ser una cadena de texto.',
            'descripcion.min'      => 'La descripción debe tener al menos 5 caracteres.',
            'descripcion.max'      => 'La descripción no debe superar los 255 caracteres.',
        ];
    }
}
