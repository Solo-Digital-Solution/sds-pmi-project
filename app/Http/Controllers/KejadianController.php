<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Kejadian;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
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
        //Test Input Form
        /*  $data = Request::createFromGlobals()->all();
        print_r($data);*/
        $validated = $request->validate([
            'nama_kejadian' => ['required'],
            'lokasi' => ['required'],
            'kecamatan' => ['required'],
            'kelurahan' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'waktu_kejadian' => ['required'],
            'dukungan_inter' => ['required'],
            'gambaran_situasi' => ['required'],
            'akses_lokasi' => ['required'],
            'status' => ['required']
        ]);

        if (!$validated) {
            return redirect()->back()->with('error', 'Validasi data gagal!');
        }

        $validated = Kejadian::create($request->except('_token'));

        // Pesan : Sukses
        $request->session()->flash('success', 'Kejadian Berhasil Ditambahkan');
        return redirect('kejadian');

        // Pesan : Gagal

    }
}
