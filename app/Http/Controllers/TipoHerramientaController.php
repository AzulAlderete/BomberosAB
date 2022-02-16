<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoHerramientaRequest;
use App\TipoHerramienta;
use Illuminate\Http\Request;

class TipoHerramientaController extends Controller
{
    // metodo para listar todos los tipos de herramientas
    public function index()
    {
        $tipos = TipoHerramienta::all();
        return response()->json([
            "data" => $tipos
        ]);
    }

    // metodo para crear un tipo de herramienta
    public function store(TipoHerramientaRequest $request)
    {
        TipoHerramienta::create($request->all());
        return response()->json([
            "message" => "Se ha creado el tipo de herramienta"
        ], 201);
    }

    public function show(TipoHerramienta $tipoHerramienta)
    {
        return response()->json([
            "data" => $tipoHerramienta
        ]);
    }

    public function update(TipoHerramientaRequest $request, TipoHerramienta $tipoHerramienta)
    {
        $tipoHerramienta->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el tipo de herramienta"
        ]);
    }

    public function destroy(TipoHerramienta $tipoHerramienta)
    {
        $tipoHerramienta->delete();
        return response()->json([
            "message" => "Se ha eliminado el tipo de herramienta"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\TipoHerramientaRequest;
use App\TipoHerramienta;
use Illuminate\Http\Request;

class TipoHerramientaController extends Controller
{
    // metodo para listar todos los tipos de herramientas
    public function index()
    {
        $tipos = TipoHerramienta::all();
        return response()->json([
            "data" => $tipos
        ]);
    }

    // metodo para crear un tipo de herramienta
    public function store(TipoHerramientaRequest $request)
    {
        TipoHerramienta::create($request->all());
        return response()->json([
            "message" => "Se ha creado el tipo de herramienta"
        ], 201);
    }

    public function show(TipoHerramienta $tipoHerramienta)
    {
        return response()->json([
            "data" => $tipoHerramienta
        ]);
    }

    public function update(TipoHerramientaRequest $request, TipoHerramienta $tipoHerramienta)
    {
        $tipoHerramienta->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el tipo de herramienta"
        ]);
    }

    public function destroy(TipoHerramienta $tipoHerramienta)
    {
        $tipoHerramienta->delete();
        return response()->json([
            "message" => "Se ha eliminado el tipo de herramienta"
        ]);
    }
}
