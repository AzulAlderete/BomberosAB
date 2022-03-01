<?php

namespace App\Http\Controllers;

use App\Models\Siniestro;
use Illuminate\Http\Request;

class SiniestroController extends Controller
{
    
    public function index()
    {
        $siniestros = Siniestro::all()->load('vehiculo', 'tipoSiniestro', 'solicitante');
        return response()->json([
            "data" => $siniestros
        ]);
    }

    public function store(SiniestroRequest $request)
    {
        Siniestro::create($request->all());
        return response()->json([
            "message" => "Se ha creado el siniestro"
        ]);
    }

    public function show(Siniestro $siniestro)
    {
        return response()->json([
            "data" => $siniestro
        ]);
    }

    public function update(Request $request, Siniestro $siniestro)
    {
        $siniestro->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el siniestro"
        ]);
    }

    public function destroy(Siniestro $siniestro)
    {
        $siniestro->delete();
        return response()->json([
            "message" => "Se ha eliminado el siniestro"
        ]);
    }
}
