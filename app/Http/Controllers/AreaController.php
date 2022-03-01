<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();
        return response()->json([
            "data" => $areas
        ]);
    }

    public function store(AreaRequest $request)
    {
        Area::create($request->all());
        return response()->json([
            "message" => "Se ha creado el area"
        ], 201);
    }

    public function show(Area $area)
    {
        return response()->json([
            "data" => $area
        ]);
    }

    public function update(AreaRequest $request, Area $area)
    {
        $area->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el area"
        ]);
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return response()->json([
            "message" => "Se ha eliminado el area"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{

    public function index()
    {
        $areas = Area::all();
        return response()->json([
            "data" => $areas
        ]);
    }

    public function store(AreaRequest $request)
    {
        Area::create($request->all());
        return response()->json([
            "message" => "Se ha creado el area"
        ], 201);
    }

    public function show(Area $area)
    {
        return response()->json([
            "data" => $area
        ]);
}
