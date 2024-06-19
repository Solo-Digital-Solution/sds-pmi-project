<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korban_terdampak;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function index()
    {
        // Menampilkan form assessment
        return view('assessment.form-assessment');
    }

    public function store(Request $request)
    {
        $korban_terdampak = DB::table('korban_terdampak')->insertGetId([
            'jumlah_kk' => $request->jumlah_kk,
            'jumlah_jiwa' => $request->jumlah_jiwa
        ]);

        $korban_jiwa = DB::table('korban_jiwa')->insertGetId([
            'luka_berat' => $request->luka_berat,
            'luka_ringan' => $request->luka_ringan,
            'meninggal' => $request->meninggal,
            'hilang' => $request->hilang,
            'mengungsi' => $request->mengungsi
        ]);

        // Redirect dengan pesan sukses
        return redirect('laporan-situasi');
    }
}
