<?php

namespace App\Http\Controllers;

use App\Models\Herramienta;
use App\Models\EstadoHerramienta;
use App\Models\TipoHerramienta;
use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //FILTRADO DE DATOS DE HERRAMIENTAS JUNTO A LOS TIPOS Y ESTADOS DE LOS MISMOS
    public function index(Request $request)
    {
        $buscar=$request->get('buscar');
        //$herramienta = Herramienta::where('nombre','like','%'.$buscar.'%');
        $data = Herramienta::where('codigo','like','%'.$buscar.'%')
        ->join('estado_herramienta as e', 'e.id','=','herramienta.estado_herramienta_id')
        ->join('tipo_herramienta as t', 't.id','=','herramienta.tipo_herramienta_id')
        ->orderBy('herramienta.id','ASC')
        ->get(['herramienta.id','herramienta.codigo','herramienta.nombre','e.id as idestado',
        'e.descripcion as estado','t.id as idtipo','t.descripcion as tipo']);
       
        return view('herramienta/index', compact('data','buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$items = Items::list('')
        $estado = EstadoHerramienta::all();
        $tipo = TipoHerramienta::all();
        return view('herramienta/create', compact('estado', 'tipo'));
        //return view('herramienta/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\HerramientaRequest $request)
    {

        $inputs =$request->all(); 
        Herramienta::create($inputs);

        return redirect()->route('herramienta.index')
                         ->with('success', 'Herramienta registrada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function show(Herramienta $herramienta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $herramienta=Herramienta::find($id);
        $estado = EstadoHerramienta::all();
        $tipo = TipoHerramienta::all();
        return view('herramienta.edit', compact('herramienta','estado','tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\HerramientaRequest $request, $id)
    {
        
        $herramienta=Herramienta::find($id);
        $herramienta->update($request->all());
        $herramienta->save();
        return redirect()->route('herramienta.index')
                         ->with('success','Registro de herramineta actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Herramienta  $herramienta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $herramienta=Herramienta::findOrFail($id);
        $herramienta->delete();

        return redirect()->route('herramienta.index')
                         ->with('success','Registro de herramienta eliminado.');
    }
}
