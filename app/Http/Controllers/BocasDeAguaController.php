<?php

namespace App\Http\Controllers;

use App\BocasDeAgua;
use App\Http\Requests\BocasDeAguaRequest;
use Illuminate\Http\Request;

class BocasDeAguaController extends Controller
{

    public function index()
    {
        $bocas = BocasDeAgua::all();
        return response()->json([
            "data" => $bocas
        ]);
    }

    public function store(BocasDeAguaRequest $request)
    {
        BocasDeAgua::create($request->all());
        return response()->json([
            "message" => "Se ha creado la boca de agua"
        ], 201);
    }


    public function show(BocasDeAgua $bocasDeAgua)
    {
        return response()->json([
            "data" => $bocasDeAgua
        ]);
    }


    public function update(BocasDeAguaRequest $request, BocasDeAgua $bocasDeAgua)
    {
        $bocasDeAgua->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado la boca de agua"
        ]);
    }


    public function destroy(BocasDeAgua $bocasDeAgua)
    {
        $bocasDeAgua->delete();
        return response()->json([
            "message" => "Se ha eliminado la boca de agua"
        ]);
    }
}
