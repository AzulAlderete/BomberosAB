<?php

namespace App\Http\Controllers;

use App\Rango;
use Illuminate\Http\Request;
use App\Http\Requests\RangoRequest;

class RangoController extends Controller
{

    public function index()
    {
        $rangos = Rango::all();
        return response()->json([
            "data" => $rangos
        ]);
    }

    public function store(RangoRequest $request)
    {
        Rango::create($request->all());
        return response()->json([
            "message" => "Se ha creado el rango"
        ], 201);
    }

    public function show(Rango $rango)
    {
        return response()->json([
            "data" => $rango
        ]);
    }


    public function update(RangoRequest $request, Rango $rango)
    {
        $rango->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el rango"
        ]);
    }

    public function destroy(Rango $rango)
    {
        $rango->delete();
        return response()->json([
            "message" => "Se ha eliminado el rango"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Rango;
use Illuminate\Http\Request;
use App\Http\Requests\RangoRequest;

class RangoController extends Controller
{

    public function index()
    {
        $rangos = Rango::all();
        return response()->json([
            "data" => $rangos
        ]);
    }

    public function store(RangoRequest $request)
    {
        Rango::create($request->all());
        return response()->json([
            "message" => "Se ha creado el rango"
        ], 201);
    }

    public function show(Rango $rango)
    {
        return response()->json([
            "data" => $rango
        ]);
    }


    public function update(RangoRequest $request, Rango $rango)
    {
        $rango->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el rango"
        ]);
    }

    public function destroy(Rango $rango)
    {
        $rango->delete();
        return response()->json([
            "message" => "Se ha eliminado el rango"
        ]);
    }
}
