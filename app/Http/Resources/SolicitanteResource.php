<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SolicitanteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
            
            'id'=> $this->id,
            'nombre'=> $this->nombre,
            'documento'=> $this->documento,
            'telefono'=> $this->telefono,
            'direccion'=> $this->direccion,
            'servicio_id'=> $this->servicio_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
