<?php

namespace App\Http\Controllers;

use App\Models\TipoSiniestro;
use Illuminate\Http\Request;

class TipoSiniestroController extends Controller
{
    public function index()
    {
        $tipos = TipoSiniestro::all();
        return response()->json([
            "data" => $tipos
        ]);
    }

    public function store(TipoSiniestroRequest $request)
    {
        TipoSiniestro::create($request->all());
        return response()->json([
            "message" => "Se ha creado el tipo de Siniestro"
        ], 201);
    }

    public function show(TipoSiniestro $tipoSiniestro)
    {
         return response()->json([
            "data" => $tipoSiniestro
        ]);
    }

    public function update(TipoSiniestroRequest $request, TipoSiniestro $tipoSiniestro)
    {
        $tipoSiniestro->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el tipo de Siniestro"
        ]);
    }

    public function destroy(TipoSiniestro $tipoSiniestro)
    {
        $tipoSiniestro->delete();
        return response()->json([
            "message" => "Se ha eliminado el tipo de Siniestro"
        ]);
    }
}
