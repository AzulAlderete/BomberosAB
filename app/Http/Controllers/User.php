<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // metodo para listar todos los usuarios
    public function index()
    {
        $usuarios = User::all();
        return response()->json([
            "data" => $usuarios
        ]);
    }

    // metodo para crear un nuevo usuario
    public function store(UserRequest $request)
    {
        User::create([
            "name"      => $request->name,
            "username"  => $request->username,
            "email"     => $request->email,
            "password"  => Hash::make($request->password),
            "role_id"   => $request->role_id
        ]);
        return response()->json([
            "message" => "Se ha creado el usuario"
        ], 201);
    }

    // metodo para mostrar un usuario
    public function show(User $user)
    {
        return response()->json([
            "data" => $user
        ]);
    }

    // metodo para actualizar un usuario
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->all());
        return response()->json([
            "message" => "Se ha actualizado el usuario"
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response()->json([
            "message" => "Se ha eliminado el usuario"
        ]);
    }
}
