<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use App\Models\Kejadian;
use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
{
    $users = User::all(); // Mengambil semua data pengguna menggunakan model User

    return view('user.user-management', compact('users'));
}

    public function profile_index()
    {
        $user = Auth::user();
        $roles = $user->roles;

        return view('profile.index', compact('user', 'roles'));
    }

    public function profile_edit()
    {
        return view('profile.edit');
    }

    public function create()
{
    $roles = Roles::all(); // Mengambil semua data role dari model Roles
    $kecamatans = Kecamatan::all(); // Mengambil semua data kecamatan dari model Kecamatan
    return view('user.create', compact('roles', 'kecamatans'));
}


    // public function create()
    // {
    // $roles = Roles::all(); // Mengambil semua data role dari model Roles

    // return view('user.tambah-akun', compact('roles'));
    // }



    // public function simpanAkun(Request $request)
    // {
    //     $user_id = $request->user_id;

    //     $role = $request->role_name;

    //     $users = DB::table('users')->insertGetId([
    //         'user_id' => $user_id,
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'username' => $request->username,
    //         'password' => $request->password,
    //         'gender' => $request->gender,
    //         'no_telp' => $request->no_telp,
    //         'profilePhoto' => ''
    //     ]);

    //     $file = $request->file('profilePhoto');
    //     $nama_dokumen = $users . '.' . $request->file('profilePhoto')->getClientOriginalExtension();
    //     $file->move('profilePhoto/', $nama_dokumen);

    //     $photo = DB::table('users')->where('user_id', '=', $user_id)->update([
    //         'profilePhoto' => $nama_dokumen
    //     ]);

    //     $role_id = $request->role_name;

    //     $roles = DB::table('users_has_role')->insert([
    //         'user_id' => $user_id,
    //         'role_id' => $role_id
    //     ]);

    //     return redirect('user-management');
    // }

    public function simpanAkun(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'user_id' => 'required',
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'username' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'no_telp' => 'required',
            'profilePhoto' => 'image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk file foto profil
            'role_name' => 'required', // Pastikan role_name terisi
        ]);

        // Simpan data pengguna ke tabel users
        $user_id = $request->user_id;
        $nama_dokumen1 = '';
        $nama_dokumen2 = '';

        if ($request->hasFile('profilePhoto')) {
            $file = $request->file('profilePhoto');
            $nama_dokumen1 = $user_id . '.' . $file->getClientOriginalExtension();
            $file->move('profilePhoto/', $nama_dokumen1);
        }

        if ($request->hasFile('ktp')) {
            $file = $request->file('ktp');
            $nama_dokumen2 = $user_id . '.' . $file->getClientOriginalExtension();
            $file->move('ktp/', $nama_dokumen2);
        }

        // Hash the password before saving
        $hashedPassword = Hash::make($request->password);

        $users = DB::table('users')->insertGetId([
            'user_id' => $user_id,
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'alamat' => $request->alamat,
            'goldar' => $request->goldar,
            'username' => $request->username,
            'password' => $hashedPassword, // Save hashed password
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'profilePhoto' => $nama_dokumen1,
            'ktp' => $nama_dokumen2
        ]);

        // Simpan role pengguna ke tabel users_has_role
        $role_ids = $request->input('role_name'); // Ini bisa berupa array jika memungkinkan pengguna untuk memilih banyak peran

        if (!empty($role_ids)) {
            foreach ($role_ids as $role_id) {
                DB::table('users_has_role')->insert([
                    'user_id' => $user_id,
                    'role_id' => $role_id
                ]);
            }
        }

        // Redirect ke halaman user-management setelah berhasil menyimpan
        return redirect('/user-management')->with('success', 'Akun berhasil dibuat');
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
        $user = User::with('roles')
            ->where('user_id', $id)
            ->first();

        $roles = DB::table('roles')->get();

        return view('user.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
{
    // Ambil data pengguna
    $user = User::findOrFail($id);

    // Hapus semua relasi peran saat ini untuk pengguna ini
    $user->roles()->detach();

    // Simpan peran baru
    $roles = $request->input('role_name');
    if (!empty($roles)) {
        foreach ($roles as $role_id) {
            $user->roles()->attach($role_id);
        }
    }

    return redirect('/user-management')->with('success', 'Peran pengguna berhasil diperbarui');
}

}
