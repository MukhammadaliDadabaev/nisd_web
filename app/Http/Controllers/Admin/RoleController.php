<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RoleStoreRequest;
use App\Http\Requests\Admin\RoleUpdateRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {

        $users = User::all();
        $roles = Role::all();
        return view('admin.role.index', compact('roles', 'users', ));
    }


    public function create()
    {
        $roles = Role::all();
        return view('admin.role.create', compact('roles'));
    }

    public function store(RoleStoreRequest $request)
    {
        $data = $request->validated();

        Role::create($data);
        return redirect()->route('admin.role.index');
    }


    public function show(Role $role)
    {
        return view('admin.role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        $roles = Role::all();
        return view('admin.role.edit', compact('role', 'roles'));
    }


    public function update(RoleUpdateRequest $request, Role $role)
    {
        $data = $request->validated();

        $role->update($data);
        return redirect()->route('admin.role.show', compact('role'));
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.role.index');
    }
}
