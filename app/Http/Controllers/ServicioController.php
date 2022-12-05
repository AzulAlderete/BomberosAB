<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoServicio;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar=$request->get('buscar');
        $data=TipoServicio::where('nombre','like','%'.$buscar.'%')
        ->get(['tipo_servicio.id','tipo_servicio.nombre','tipo_servicio.descripcion']);
        return view('servicio/index', compact('data','buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\ServicioRequest $request)
    {

        $inputs =$request->all(); 
        TipoServicio::create($inputs);

        return redirect()->route('servicio.index')
                         ->with('success', 'Servicio registrado satisfactoriamente.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(TipoServicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicio=TipoServicio::find($id);
        return view('servicio.edit', compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\ServicioRequest $request, $id)
    {
        
        $servicio=TipoServicio::find($id);
        $servicio->update($request->all());
        $servicio->save();
        return redirect()->route('servicio.index')
                         ->with('success','Registro de Servicio actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicio=TipoServicio::findOrFail($id);
        $servicio->delete();

        return redirect()->route('servicio.index')
                         ->with('success','Registro de servicio eliminado.');
    }
}
