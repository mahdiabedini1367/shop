<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleRequest;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleContorller extends Controller
{

    public function index()
    {
        return view('admin.roles.index',[
            'roles'=>Role::all(),
        ]);
    }


    public function create()
    {
        return  view('admin.roles.create',[
            'permissions'=>Permission::all(),
        ]);
    }


    public function store(RoleRequest $request)
    {
        $role = Role::query()->create([
            'title'=>$request->get('title'),
        ]);

        $role->permissions()->attach($request->get('permissions'));

        return redirect(route('roles.index'));

    }


    public function edit(Role $role)
    {
        return view('admin.roles.edit' , [
            'role'=>$role,
            'permissions'=>Permission::all(),
        ]);
    }


    public function update(RoleRequest $request, Role $role)
    {
        $role->update([
            'title'=>$request->get('title',$role->title),
        ]);

        $role->permissions()->sync($request->get('permissions'));

        return  redirect(route('roles.index'));
    }


    public function destroy(Role $role)
    {
        $role->permissions()->detach();
        $role->delete();

        return redirect(route('roles.index'));
    }
}
