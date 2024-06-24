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
        $data['roles'] = Roles::get(["role_id", "role_name"]);
        return view('user.tambah-akun', $data);
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

        $file = $request->file('profilePhoto');
        $nama_dokumen = $users . '.' . $request->file('profilePhoto')->getClientOriginalExtension();
        $file->move('profilePhoto/', $nama_dokumen);

        $photo = DB::table('users')->where('user_id', '=', $user_id)->update([
            'profilePhoto' => $nama_dokumen
        ]);

        $role_id = $request->role_name;

        $roles = DB::table('users_has_role')->insert([
            'user_id' => $user_id,
            'role_id' => $role_id
        ]);

        return redirect('user-management');
    }

    public function destroy($id)
    {
        // Hapus data pengguna
        $user = DB::table('users')->where('user_id', $id)->delete();

        // Hapus relasi role pengguna
        $userRole = DB::table('users_has_role')->where('user_id', $id)->delete();

        return redirect('/user-management')->with('success', 'Akun berhasil dihapus');
    }

    public function edit($id)
    {
        $user = DB::table('users')
            ->join('users_has_role', 'users_has_role.user_id', '=', 'users.user_id')
            ->join('roles', 'users_has_role.role_id', '=', 'roles.role_id')
            ->where('users.user_id', $id)
            ->select('users.*', 'roles.role_id as role_id')
            ->first();

        $roles = DB::table('roles')->get();

        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = DB::table('users')->where('user_id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'no_telp' => $request->no_telp,
        ]);

        $role = DB::table('users_has_role')->where('user_id', $id)->update([
            'role_id' => $request->role_name,
        ]);

        return redirect('/user-management')->with('success', 'Akun berhasil diperbarui');
    }


}
