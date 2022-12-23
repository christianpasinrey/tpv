<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
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
            'subfamilia_id' => 'required|integer',
            'imagen' => 'nullable|image',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'activo'=> 'required|boolean',
        ];
    }
}
