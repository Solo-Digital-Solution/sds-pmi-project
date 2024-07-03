<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {

        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date'],
            'kecamatan' => ['required', 'string', 'max:255'],
            'kelurahan' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'goldar' => ['required', 'string', 'max:255'],
            'no_telp' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:' . User::class],
            'gender' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()],
        ]);

        $filePath = $request->file('ktp');
        $fileFullPath = public_path('ktp/' . $filePath); // Mendapatkan path lengkap file
        // if (file_exists($fileFullPath)) {
        //     unlink($filePath); // Menghapus file dari direktori
        // }

        $user = User::create([
            'name' => $request->name,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'email' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'goldar' => $request->goldar,
            'no_telp' => $request->no_telp,
            'username' => $request->username,
            'gender' => $request->gender,
            'ktp' => $fileFullPath,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        //Auth::login($user);

        //return redirect(route('dashboard', absolute: false));
        return redirect(route('login', absolute: false))->with('success', 'Register telah berhasil!');
    }
}
