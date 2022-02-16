<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // metodo para listar todos los roles
    public function index()
    {
        $roles = Role::all();
        return response()->json([
            "data" => $roles
        ]);
    }

    // metodo para crear un nuevo rol
    public function store(RoleRequest $request)
    {
        Role::create($request->all());
        return response()->json([
            "message" => "El rol ha sido creado"
        ], 201);
    }

    // metodo para mostrar un rol
    public function show(Role $role)
    {
        return response()->json([
            "data" => $role
        ]);
    }

    // metodo para actualizar un rol
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->all());
        return response()->json([
            "message" => "El rol ha sido actualizado"
        ]);
    }

    // metodo para eliminar un rol
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json([
            "message" => "El rol ha sido eliminado"
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // metodo para listar todos los roles
    public function index()
    {
        $roles = Role::all();
        return response()->json([
            "data" => $roles
        ]);
    }

    // metodo para crear un nuevo rol
    public function store(RoleRequest $request)
    {
        Role::create($request->all());
        return response()->json([
            "message" => "El rol ha sido creado"
        ], 201);
    }

    // metodo para mostrar un rol
    public function show(Role $role)
    {
        return response()->json([
            "data" => $role
        ]);
    }

    // metodo para actualizar un rol
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->all());
        return response()->json([
            "message" => "El rol ha sido actualizado"
        ]);
    }

    // metodo para eliminar un rol
    public function destroy(Role $role)
    {
        $role->delete();
        return response()->json([
            "message" => "El rol ha sido eliminado"
        ]);
    }
}
