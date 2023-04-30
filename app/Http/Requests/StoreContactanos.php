<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactanos extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=>'required',
            'correo'=>'required|email',
            'telefono'=>'required',
            'mensaje'=>'required',
            'propiedad'=>'required',
            'precio'=>'required',
            'formaContacto'=>'required',
            'empleado'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'empleado.required'=>'Debe seleccionar un empleado',
            'propiedad.required'=>'Debe seleccionar comprar o vender',
            'formaContacto.required'=>'Seleccione una forma de contácto'
        ];
    }
}
