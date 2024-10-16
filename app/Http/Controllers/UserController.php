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

    public function viewProfil()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors(['User not found']);
        }

        $roles = $user->roles->pluck('role_name')->toArray();

        $kecamatan = DB::table('kecamatan')->where('id_kecamatan', $user->kecamatan)->first();

        if (!$kecamatan) {
            return redirect()->back()->withErrors(['Kecamatan not found']);
        }

        return view('profile.index', compact('kecamatan', 'user', 'roles'));
    }

    public function editProfil()
    {
        $user = Auth::user();

        $kecamatans = DB::table('kecamatan')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        //return view('kejadian.edit-kejadian',['kejadian' => $kejadian]);
        return view('profile.edit', compact('kecamatans', 'user'));
    }

    public function updateProfil(Request $request, $user_id)
    {
        // Mulai transaksi database
        DB::beginTransaction();
        try {
            // Validasi data input
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'alamat' => 'required',
                'goldar' => 'required',
                'no_telp' => 'required',
                'username' => 'required',
                'gender' => 'required',
                'profilePhoto' => 'image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Temukan user berdasarkan id
            $user = User::findOrFail($user_id);

            // Update data user
            $user->update($request->only([
                'name',
                'email',
                'tempat_lahir',
                'tanggal_lahir',
                'kecamatan',
                'kelurahan',
                'alamat',
                'goldar',
                'no_telp',
                'username',
                'gender'
            ]));

            // Simpan foto profil jika ada
            if ($request->hasFile('profilePhoto')) {
                $file = $request->file('profilePhoto');
                $nama_dokumen = $user_id . '.' . $file->getClientOriginalExtension();
                $file->move('profilePhoto/', $nama_dokumen);

                // Simpan nama file foto di kolom 'profilePhoto' dalam tabel users
                $user->profilePhoto = $nama_dokumen;
                $user->save();
            }

            // Commit transaksi
            DB::commit();

            // Pesan sukses
            return redirect('profile')->with('success', 'Profil berhasil di-edit');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();

            // Pesan gagal
            return redirect('profile')->with('error', 'Profil gagal di-edit: ' . $e->getMessage());
        }
    }

    public function create()
    {
        $roles = Roles::all(); // Mengambil semua data role dari model Roles
        $kecamatans = Kecamatan::all(); // Mengambil semua data kecamatan dari model Kecamatan
        return view('user.create', compact('roles', 'kecamatans'));
    }

    public function showChangePasswordForm()
    {
        $user = Auth::user();
        return view('profile.ganti-password', compact('user'));
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        // Log input untuk debugging
        \Log::info('Password Change Request:', [
            'user_id' => $user->id,
            'current_password' => $request->current_password,
            'new_password' => $request->new_password,
        ]);

        // Mulai transaksi database
        DB::beginTransaction();
        try {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:8|confirmed',
            ]);

            // Cek apakah password lama sesuai
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->route('password.change')->with('error', 'Password lama tidak sesuai.');
            }

            // Update password user
            $user->password = Hash::make($request->new_password);
            $user->save();

            DB::commit();
            return redirect('profile')->with('success', 'Password berhasil diubah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('password.change')->with('error', 'Password gagal diubah: ' . $e->getMessage());
        }
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
            'user_id' => ['required', 'unique:' . User::class],
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'password' => 'required',
            'gender' => 'required',
            'no_telp' => 'required',
            'profilePhoto' => 'image|mimes:jpeg,png,jpg|max:2048', // Validasi untuk file foto profil
            'role_name' => 'required', // Pastikan role_name terisi
        ]);

        $birthDate = new \DateTime($request->input('tanggal_lahir'));
        $currentDate = new \DateTime();
        $age = $birthDate->diff($currentDate)->y;

        if ($age < 17) {
            return back()->withErrors(['tanggal_lahir' => 'Anda harus berusia minimal 17 tahun untuk mendaftar.'])->withInput();
        }

        // Simpan data pengguna ke tabel users
        try {
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
            return redirect('/user-management')->with('success', 'Berhasil menambahkan akun baru');
        } catch (\Exception $e) {
            // Redirect kembali dengan pesan gagal
            return back()->with('error', 'Gagal menambahkan akun baru')->withInput();
        }
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
