<?php

namespace KaravayPro\Http\Controllers;

use Illuminate\Http\Request;
use KaravayPro\User;
use KaravayPro\Role;

class UserRolesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        $users=User::all();
        $roles=Role::all();

        return view('rights',['users' => $users,
                                      'roles'=> $roles ]);
    }

    public function postAssignRoles(Request $request)
    {

        $user=User::where('email', $request['email'])->first();
        $user->roles()->detach();
        $roles=Role::all();

        foreach ($roles as $role) {
            if($request[strtolower('role_'.$role->name)])   {
                $user->roles()->attach(Role::where('name',$role->name)->first());
            }
        }
        return redirect()->back();
    }

}
