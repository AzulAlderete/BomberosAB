<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiniestroRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'descripcion' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
            'numero' => 'required|numeric',
            'fecha' => 'date',
            'tipo_siniestro_id' => 'required',
            'solicitante_id' => 'required',
            'vehiculo_id' => 'required'
        ];
    }
}
