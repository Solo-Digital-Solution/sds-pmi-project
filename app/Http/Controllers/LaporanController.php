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
            'id_korban_terdampak' => $request->id_korban_terdampak,
            'jumlah_kk' => $request->jumlah_kk,
            'jumlah_jiwa' => $request->jumlah_jiwa
        ]);

        $korban_jiwa = DB::table('korban_jiwa')->insertGetId([
            'id_korban_jiwa' => $request->id_korban_jiwa,
            'luka_berat' => $request->luka_berat,
            'luka_ringan' => $request->luka_ringan,
            'meninggal' => $request->meninggal,
            'hilang' => $request->hilang,
            'mengungsi' => $request->mengungsi
        ]);


        $personil = DB::table('personil')->insertGetId([]);

        $kerusakan_rumah = DB::table('kerusakan_rumah')->insertGetId([
            'id_kerusakan_rumah' => $request->id_kerusakan_rumah,
            'rusak_berat' => $request->rusak_berat,
            'rusak_sedang' => $request->rusak_sedang,
            'rusak_ringan' => $request->rusak_ringan
        ]);

        $kerusakan_fasilitas = DB::table('kerusakan_fasilitas')->insertGetId([
            'id_kerusakan_fasilitas' => $request->id_kerusakan_fasilitas,
            'sekolah' => $request->sekolah,
            'tempat_ibadah' => $request->tempat_ibadah,
            'rumah_sakit' => $request->rumah_sakit,
            'pasar' => $request->pasar,
            'gedung_pemerintah' => $request->gedung_pemerintah,
            'lain-lain' => $request->lain_lain
        ]);

        $kerusakan_infrastruktur = DB::table('kerusakan_infrastruktur')->insertGetId([
            'id_kerusakan_infrastruktur' => $request->id_kerusakan_infrastruktur,
            'deskripsi_kerusakan' => $request->deskripsi_kerusakan
        ]);

        $shelter = DB::table('shelter')->insertGetId([
            'id_lokasi_shelter' => $request->id_lokasi_shelter,
            'lokasi_shelter' => $request->lokasi_shelter,
            'jumlah_kk' => $request->jumlah_kk,
            'jumlah_jiwa' => $request->jumlah_jiwa,
            'jumlah_laki' => $request->jumlah_laki,
            'jumlah_perempuan' => $request->jumlah_perempuan,
            'dibawah_lima' => $request->dibawah_lima,
            'antara_lima_dan_delapanbelas' => $request->antara_lima_dan_delapanbelas,
            'lebih_delapanbelas' => $request->lebih_delapanbelas,
            'jumlah' => $request->jumlah
        ]);

        DB::table('dampak')->insert([
            'id_korban_terdampak' => $korban_terdampak,
            'id_korban_jiwa' => $korban_jiwa,
            'id_kerusakan_rumah' => $kerusakan_rumah,
            'id_kerusakan_fasilitas' => $kerusakan_fasilitas,
            'id_kerusakan_infrastruktur' => $kerusakan_infrastruktur,
            'id_lokasi_shelter' => $shelter
        ]);

        $personil = DB::table('personil')->insertGetId([
            'id_personil' => $request->id_personil,
            'pengurus' => $request->pengurus,
            'staf_markas' => $request->staf_markas,
            'relawan_pmi' => $request->relawan_pmi,
            'sukarelawan_spesialis' => $request->sukarelawan_spesialis
        ]);

        $tsr = DB::table('tsr')->insertGetId([
            'id_tsr' => $request->id_tsr,
            'medis' => $request->medis,
            'paramedis' => $request->paramedis,
            'relief' => $request->relief,
            'logistics' => $request->logistics,
            'watsan' => $request->watsan,
            'it_telkom' => $request->it_telkom,
            'it_telekom' => $request->it_telekom,
            'sheltering' => $request->sheltering
        ]);

        $tdb = DB::table('tdb')->insertGetId([
            'id_tdb' => $request->id_tdb,
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
            'id_evakuasi_korban' => $request->id_evakuasi_korban,
            'luka_ringan_berat' => $request->luka_ringan_berat,
            'meninggal' => $request->meninggal
        ]);

        $distribusi_layanan = DB::table('distribusi_layanan')->insertGetId([
            'id_distribusi_layanan' => $request->id_distribusi_layanan,
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
            'id_personil_dihubungi' => $request->id_personil_dihubungi,
            'nama_lengkap' => $request->nama_lengkap,
            'posisi' => $request->posisi,
            'kontak' => $request->kontak
        ]);

        $petugas_posko = DB::table('petugas_posko')->insertGetId([
            'id_petugas_posko' => $request->id_petugas_posko,
            'nama_lengkap' => $request->nama_lengkap,
            'kontak' => $request->kontak
        ]);


        DB::table('mobilisasi')->insert([
            'id_personil' => $personil,
            'id_tsr' => $tsr,
            'id_tdb' => $tdb,
        ]);

        

        // $tdb = DB::table('dokumentasi')->insertGetId([
        //     'id_dokumentasi' => $request->id_dokumentasi,
        //     'file_path' => $request->file_path
        // ]);

        $folder = 'public/dokumentasi';

        // Array untuk menyimpan path file
        $filePaths = [];

        // Proses setiap file yang diunggah
        if($request->hasFile('dokumentasi')) {
            foreach ($request->file('dokumentasi') as $file) {
                // Simpan file dan ambil path-nya
                $path = $file->store($folder);
                // Ubah path ke format yang sesuai untuk penyimpanan database
                $publicPath = str_replace('public/', 'dokumentasi/', $path);
                // Tambahkan path ke array
                $filePaths[] = $publicPath;
            }
        }

        // Simpan path file ke database
        foreach ($filePaths as $filePath) {
            $tdb = DB::table('dokumentasi')->insertGetId([
                'id_dokumentasi' => $request->id_dokumentasi,
                'file_path' => $filePath
            ]);
        }

        // Redirect dengan pesan sukses
        return redirect('laporan-situasi');
    }
}
