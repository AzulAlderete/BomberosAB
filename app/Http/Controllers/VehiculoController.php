<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{

    public function index()
    {
        $tipos = TipoVehiculo::all();
        return response()->json([
            "data" => $tipos
        ]);
    }

    public function store(TipoVehiculoRequest $request)
    {
        TipoVehiculo::create($request->all());
        return response()->json([
            "message" => "Se ha creado el tipo de Vehiculo"
        ], 201);
    }


    public function show(TipoVehiculo $tipoVehiculo)
    {
        return response()->json([
            "data" => $tipoVehiculo
        ]);
    }


    public function update(TipoVehiculoRequest $request, TipoVehiculo $tipoVehiculo)
    {
        $tipoVehiculo->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el tipo de Vehiculo"
        ]);
    }

    public function destroy(TipoVehiculo $tipoVehiculo)
    {
        $tipoVehiculo->delete();
        return response()->json([
            "message" => "Se ha eliminado el tipo de Vehiculo"
        ]);
    }

}
