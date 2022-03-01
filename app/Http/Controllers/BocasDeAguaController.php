<?php

namespace App\Http\Controllers;

use App\Models\BocasDeAgua;
use Illuminate\Http\Request;

class BocasDeAguaController extends Controller
{
    ublic function index()
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
        ]);ublic function index()
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
