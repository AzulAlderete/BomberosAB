<?php

namespace App\Http\Controllers;

use App\Models\Siniestro;
use App\Models\BocaAgua;
use App\Models\Solicitud;
use App\Models\TipoServicio;
use Illuminate\Http\Request;

class SiniestroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //CONEXION CON LAS TABLAS SINIESTRO, SOLICITUD Y BOCA_AGUA
    public function index()
    {
        
        $siniestro=Siniestro::join('solicitud as s','s.id','=','siniestro.solicitud_id')
            ->join('boca_agua as b','b.id','=','siniestro.boca_agua_id')
            ->orderBy('siniestro.id','ASC')
            ->get(['siniestro.id','siniestro.numero','siniestro.descripcion','siniestro.boca_agua_id',
            'siniestro.solicitud_id']);
        return view('siniestro.index', ['siniestro' => $siniestro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $boca_agua=BocaAgua::all();
        $solicitud=Solicitud::all();
        return view('siniestro.create', compact('boca_agua','solicitud'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\SiniestroRequest $request)
    {
    
        $inputs =$request->all(); 
        Siniestro::create($inputs);

        return redirect()->route('siniestro.index')
                         ->with('success', 'Siniestro registrado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siniestro  $siniestro
     * @return \Illuminate\Http\Response
     */
    public function show(Siniestro $siniestro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siniestro  $siniestro
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siniestro=Siniestro::find($id);
        $boca_agua=BocaAgua::all();
        $solicitud=Solicitud::all();
        return view('siniestro.edit', compact('siniestro','boca_agua','solicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\SiniestroRequest $request,$id)
    {
        $siniestro=Siniestro::find($id);
        $siniestro->update($request->all());
        $siniestro->save();
        return redirect()->route('siniestro.index')
                         ->with('success','Registro de siniestro actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siniestro  $siniestro
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siniestro=Siniestro::findOrFail($id);
        $siniestro->delete();

        return redirect()->route('siniestro.index')
                         ->with('success','Registro de siniestro eliminado.');
    }
}
