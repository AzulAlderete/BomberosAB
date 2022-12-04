<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Solicitante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\SolicitanteResource;

class SolicitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar=$request->get('buscar');
        $solicitante = Solicitante::where('documento','like','%'.$buscar.'%')
        ->get(['id','nombre','documento','direccion','telefono','servicio_id']);
        return response([ 'solicitante' => SolicitanteResource::collection($solicitante), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'nombre' => 'required',
            'documento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'servicio_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Validation Error']);
        }

        $solicitante = Solicitante::create($data);

        return response(['solicitante' => new SolicitanteResource($solicitante), 'message' => 'Created successfully'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitante $solicitante)
    {
        return response(['solicitante' => new SolicitanteResource($solicitante), 'message' => 'Retrieved successfully'], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitante $solicitante)
    {
        $solicitante->update($request->all());

        return response(['solicitante' => new SolicitanteResource($solicitante), 'message' => 'Update successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();

        return response(['message' => 'Deleted']);
    }
}