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

        $personil = DB::table('personil')->insertGetId([
            'pengurus' => $request->pengurus,
            'staf_markas' => $request->staf_markas,
            'relawan_pmi' => $request->relawan_pmi,
            'sukarelawan_spesialis' => $request->sukarelawan_spesialis
        ]);

        $tsr = DB::table('tsr')->insertGetId([
            'medis' => $request->medis,
            'paramedis' => $request->paramedis,
            'relief' => $request->relief,
            'logistics' => $request->logistics,
            'watsan' => $request->watsan,
            'it_telkom' => $request->it_telkom,
            'sheltering' => $request->sheltering
        ]);

        $tdb = DB::table('tdb')->insertGetId([
            'kend_ops' => $request->kend_ops,
            'truk_angkutan' => $request->truk_angkutan,
            'truk_tangki' => $request->truk_tangki,
            'double_cabin' => $request->double_cabin,
            'alat_du' => $request->alat_du,
            'ambulans' => $request->ambulans,
            'alat_watsan' => $request->alat_watsan,
            'rs_lapangan' => $request->rs_lapangan,
            'alat_pkdd' => $request->alat_pkdd,
            'gudang_lapangan' => $request->gudang_lapangan,
            'posko_aju' => $request->posko_aju,
            'alat_it_lapangan' => $request->alat_it_lapangan
        ]);

        $evakuasi_korban = DB::table('evakuasi_korban')->insertGetId([
            'id_evakuasi_korban' => $id_evakuasi_korban,
            'luka_ringan_berat' => $request->luka_ringan_berat,
            'meninggal' => $request->meninggal
        ]);

        $distribusi_layanan = DB::table('distribusi_layanan')->insertGetId([
            'id_distribusi_layanan' => $id_distribusi_layanan,
            'jenis_distribusi_layanan' => $request->jenis_distribusi_layanan,
            'lokasi' => $request->lokasi,
            'unit' => $request->unit,
            'jumlah' => $request->jumlah
        ]);

        $giat_pmi = DB::table('giat_pmi')->insert([
            'id_evakuasi_korban' => $evakuasi_korban
        ]);

        $layanan_korban = DB::table('layanan_korban')->insert([
            'id_giat_pmi' => $giat_pmi,
            'id_distribusi_layanan' => $distribusi_layanan
        ]);

        $personil_dihubungi = DB::table('personil_dihubungi')->insertGetId([
            'id_personil_dihubungi' => $id_personil_dihubungi,
            'nama_lengkap' => $request->nama_lengkap,
            'posisi' => $request->posisi,
            'kontak' => $request->kontak
        ]);

        $petugas_posko = DB::table('petugas_posko')->insertGetId([
            'id_petugas_posko' => $id_petugas_posko,
            'nama_lengkap' => $request->nama_lengkap,
            'kontak' => $request->kontak
        ]);



        // Redirect dengan pesan sukses
        return redirect('laporan-situasi');
    }
}
