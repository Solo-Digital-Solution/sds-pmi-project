<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Response;
use Redirect;
use App\Models\{Kejadian, Kecamatan, Kelurahan};

class DropdownController extends Controller
{
    public function indexKecamatan()
    {
        $data['kecamatans'] = Kecamatan::get(["id_kecamatan", "nama_kecamatan"]);
        return view('kejadian.tambah-kejadian', $data);
    }

    public function indexKecamatanEdit()
    {
        $data['kecamatans'] = Kecamatan::get(["id_kecamatan", "nama_kecamatan"]);
        return view('kejadian.edit-kejadian', [ $data => $kecamatans]);
    }

    public function fetchKelurahan(Request $request)
    {
        $data['kelurahans'] = Kelurahan::where("id_kecamatan",$request->id_kecamatan)->get(["id_kelurahan", "nama_kelurahan"]);
        return response()->json($data);
    }

}
