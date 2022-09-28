<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index() {
        $roles = Role::all();

        return view('roles.index', compact('roles'));
    }

    public function create () {
        
        $permissions = Permission::all();

        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request) {
        
        $rules = ['name' => 'required|string|unique:roles,name'];
        
        $message = [
            'name.required' => 'El nombre del rol no puede quedar vacio',
            'name.string'   => 'El nombre del rol tiene que ser una cadena de caracteres',
            'name.unique'   => 'El nombre del rol ya existe, intente ingresar otro nombre'
        ];
        
        $validator = $this->validate($request, $rules, $message);

        $role = Role::create($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('roles.index', compact('role'))->with('informacion', 'agregar');
    }

    public function edit(Role $role) {
        
        $permissions = Permission::all();

        return view('roles.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role) {   
        $message = ['name.required' => 'El nombre del rol no puede quedar vacio'];

        $request->validate(['name' => 'required'], $message);

        $role->update($request->all());

        $role->permissions()->sync($request->permissions);

        return redirect()->route('roles.index', compact('role'))->with('informacion', 'actualizar');
    }

    public function destroy(Role $role) {   
        $role->delete();

        return redirect()->route('roles.index', compact('role'))->with('informacion', 'eliminar');
    }
}
