<?php

namespace App\Http\Controllers;

use App\Herramienta;
use App\Http\Requests\HerramientaRequest;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{

    public function index()
    {
        $herramientas = Herramienta::all()->load('tipoHerramienta');
        return response()->json(['data' => $herramientas]);
    }

    public function store(HerramientaRequest $request)
    {
        Herramienta::create($request->all());
        return response()->json([
            "message" => "Se ha creado la herramienta"
        ], 201);
    }

    public function show(Herramienta $herramienta)
    {
        return response()->json([
            "data" => $herramienta
        ]);
    }

    public function update(HerramientaRequest $request, Herramienta $herramienta)
    {
        $herramienta->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado la herramienta"
        ]);
    }

    public function destroy(Herramienta $herramienta)
    {
        $herramienta->delete();
        return response()->json([
            "message" => "Se ha eliminado la herramienta"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Herramienta;
use App\Http\Requests\HerramientaRequest;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{

    public function index()
    {
        $herramientas = Herramienta::all()->load('tipoHerramienta');
        return response()->json(['data' => $herramientas]);
    }

    public function store(HerramientaRequest $request)
    {
        Herramienta::create($request->all());
        return response()->json([
            "message" => "Se ha creado la herramienta"
        ], 201);
    }

    public function show(Herramienta $herramienta)
    {
        return response()->json([
            "data" => $herramienta
        ]);
    }

    public function update(HerramientaRequest $request, Herramienta $herramienta)
    {
        $herramienta->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado la herramienta"
        ]);
    }

    public function destroy(Herramienta $herramienta)
    {
        $herramienta->delete();
        return response()->json([
            "message" => "Se ha eliminado la herramienta"
        ]);
    }
}
