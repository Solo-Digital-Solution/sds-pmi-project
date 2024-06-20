<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $totalData = User::count();
        $dataPerPage = max(min($totalData, 10), 1);

        $users = DB::table('users')->join('users_has_role', 'users_has_role.user_id', '=', 'users.user_id')->join('roles', 'users_has_role.role_id', 'roles.role_id')->get();

        return view('user.user-management', compact('users'));
    }

    public function create()
    {
        $roles = DB::table('roles')->get();

        return view('user.create', compact('roles'));
    }

    public function simpanAkun(Request $request)
    {
        $user_id = $request->user_id;

        $role = $request->role_name;

        $users = DB::table('users')->insertGetId([
            'user_id' => $user_id,
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'profilePhoto' => ''
        ]);

        $role_id = $request->role_name;

        $roles = DB::table('users_has_role')->insert([
            'user_id' => $user_id,
            'role_id' => $role_id
        ]);

        return redirect('user-management');
    }


}
