<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreServicioRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'imagen' => 'nullable|image',
            'activo' => 'required|boolean',
            'familia_id' => 'required|integer',
            'subfamilia_id' => 'nullable|integer',
        ];
    }
}
