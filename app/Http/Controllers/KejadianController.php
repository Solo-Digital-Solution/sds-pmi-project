<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Kejadian;
use Illuminate\Http\Request;

class KejadianController extends Controller
{
    public function index()
    {
        $totalData = kejadian::count();
        $dataPerPage = max(min($totalData, 10), 1);
        $kejadians = Kejadian::latest()->paginate($dataPerPage);

        return view('kejadian.kejadian', ['kejadians' => $kejadians]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'nama_kejadian' => ['required', 'string'],
            'lokasi' => ['required', 'text'],
            'latitude' => ['required', 'double'],
            'longitude' => ['required', 'double'],
            'waktu_kejadian' => ['required', 'dateTime'],
            'dukungan_inter' => ['required', 'boolean'],
            'gambaran_situasi' => ['required', 'text'],
            'akses_lokasi' => ['required', 'text'],
            'status' => ['required', 'enum']
        ]);

        Kejadian::create($validated);

        // Pesan : Sukses
        $request->session()->flash('success', 'Kejadian Berhasil Ditambahkan');
        return redirect('kejadian.kejadian');

        // Pesan : Gagal
        if (!$validated) {
            return redirect()->back()->with('error', 'Validasi data gagal!');
        }
    }
}
