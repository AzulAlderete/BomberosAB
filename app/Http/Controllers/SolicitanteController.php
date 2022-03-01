<?php

namespace App\Http\Controllers;

use App\Models\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{
    public function index()
    {
        $solicitantes = Solicitante::all();
        return response()->json([
            "data" => $solicitantes
        ]);
    }

    public function store(SolicitanteRequest $request)
    {
        Solicitante::create($request->all());
        return response()->json([
            "message" => "Se ha creado el solicitante"
        ], 201);
    }

    public function show(Solicitante $solicitante)
    {
        return response()->json([
            "data" => $solicitante
        ]);
    }

    public function update(Request $request, Solicitante $solicitante)
    {
        $solicitante->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el solicitante"
        ]);
    }

    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();
        return response()->json([
            "message" => "Se ha eliminado el solicitante"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\SolicitanteRequest;
use App\Solicitante;
use Illuminate\Http\Request;

class SolicitanteController extends Controller
{

    public function index()
    {
        $solicitantes = Solicitante::all();
        return response()->json([
            "data" => $solicitantes
        ]);
    }

    public function store(SolicitanteRequest $request)
    {
        Solicitante::create($request->all());
        return response()->json([
            "message" => "Se ha creado el solicitante"
        ], 201);
    }

    public function show(Solicitante $solicitante)
    {
        return response()->json([
            "data" => $solicitante
        ]);
    }

    public function update(Request $request, Solicitante $solicitante)
    {
        $solicitante->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el solicitante"
        ]);
    }

    public function destroy(Solicitante $solicitante)
    {
        $solicitante->delete();
        return response()->json([
            "message" => "Se ha eliminado el solicitante"
        ]);
    }
}
