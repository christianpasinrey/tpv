<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFamiliaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre' => 'nullable|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'imagen' => 'nullable|image',
            'zona_id' => 'nullable|integer',
            'activo' => 'nullable|boolean',
        ];
    }
}
