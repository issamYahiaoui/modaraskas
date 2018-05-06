<?php

namespace App\Http\Controllers;

use App\Message;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
        $this->middleware('auth');

    }

    public function index()
    {
        return view('admin.permissions.index')->with([
            'roles' => Role::all(),
            'title' => __('permissions.permissions'),
            'active' => 'permissions'
        ]);
    }

    public function permissionsOf($role)
    {
        return view('admin.permissions.permission')->with([
            'permissions' => Permission::all(),
            'role' => Role::findByName($role),
            'title' => __('permissions.permissions'),
            'active' => 'permissions'
        ]);
    }

    public function updatePermissionsOf(Request $request,$role)
    {
        $roleModel=Role::findByName($role);
            $permissions=[];
        foreach (Permission::all() as $permission) {
            if ($request->get($permission->id)){
                array_push($permissions,$permission->name);
            }
        }
        $roleModel->syncPermissions($permissions);

        return redirect()->back();
    }
}
