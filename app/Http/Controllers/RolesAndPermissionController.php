<?php

namespace App\Http\Controllers;
use App\Models\Permission;


use Illuminate\Http\Request;

class RolesAndPermissionController extends Controller
{
    //
    public function addPermission(Request $request)
    {
        $permissions =[
            'Dashboard',
            'Receiving',
            'Item List',
            'Raw Mats',
            'Finish Good'
        ];
        foreach ($permissions as $permission){
          Permission::create(['name' => $permission]);
        }
        
    }

    public function createRole()
    {
        $permissions = Permission::all();
        $users = User::select('name','id')->get();
        return view('RolesAndPermissions.CreateRoles',compact('permissions','users'));
    }

    public function create(Request $request)
    {
        $role = Role::create(['name' => $request->name ]);
        foreach($request->permission as $permission)
        {
            $role->givePermissionTo($permission);
        }
        foreach($request->users as $user){
            $user =User::find($user);
            $user->assignRole($role->name);
        }

        return redirect('showRoles');
    }
}
