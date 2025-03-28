<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComentarioRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'contenido' => 'required|string|min:5',
            'nombre_usuario' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'articulo_id' => 'required|exists:articulos,id'
        ];
    }

    /**
     * Get custom error messages for validation rules.
     */
    public function messages(): array
    {
        return [
            'contenido.required' => 'El contenido del comentario es obligatorio.',
            'contenido.string' => 'El contenido debe ser un texto válido.',
            'contenido.min' => 'El contenido debe tener al menos 5 caracteres.',

            'nombre_usuario.required' => 'El nombre de usuario es obligatorio.',
            'nombre_usuario.string' => 'El nombre de usuario debe ser un texto válido.',
            'nombre_usuario.max' => 'El nombre de usuario no puede exceder los 255 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe ingresar un correo electrónico válido.',
            'email.max' => 'El correo electrónico no puede exceder los 255 caracteres.',

            'articulo_id.required' => 'El ID del artículo es obligatorio.',
            'articulo_id.exists' => 'El artículo seleccionado no existe.'
        ];
    }
}
