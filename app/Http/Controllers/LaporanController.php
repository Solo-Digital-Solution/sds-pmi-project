<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korban_terdampak;
use Illuminate\Support\Facades\DB;
use App\Models\Laporan;
use App\Models\Dampak;
use App\Models\Distribusi_layanan;
use App\Models\Dokumentasi;
use App\Models\Evakuasi_korban;
use App\Models\Giat_pmi;
use App\Models\Kejadian;
use App\Models\Kerusakan_fasilitas;
use App\Models\Kerusakan_infrastruktur;
use App\Models\Kerusakan_rumah;
use App\Models\Korban_jiwa;
use App\Models\Layanan_korban;
use App\Models\Mobilisasi;
use App\Models\Personil;
use App\Models\Personil_dihubungi;
use App\Models\Petugas_posko;
use App\Models\Shelter;
use App\Models\Tdb;
use App\Models\Tsr;

// Pastikan untuk mengimpor model Personil_dihubungi

class LaporanController extends Controller
{
    public function index($id_kejadian)
    {
        // Menampilkan laporan situasi berdasarkan id_kejadian
        $laporans = Laporan::where('id_kejadian', $id_kejadian)->latest()->paginate(10);

        return view('lapsit.laporan-situasi', ['laporans' => $laporans, 'id_kejadian' => $id_kejadian]);
    }

    public function checkReportNumber(Request $request)
    {
        $newReportNumber = (int) $request->input('nama_laporan');

        // Ambil angka laporan yang ada dari database
        $existingReportNumbers = DB::table('laporan')->pluck('nama_laporan')->map(function ($value) {
            return (int) $value;
        })->toArray();

        // Kalau tabelnya kosong, asumsi laporan pertama adalah 0
        if (empty($existingReportNumbers)) {
            $existingReportNumbers = [0];
        }

        // Cari angka terbesar yang ada di database
        $maxExistingNumber = max($existingReportNumbers);

        // Cek apakah angka yang dimasukkan user valid
        if ($newReportNumber > $maxExistingNumber + 1) {
            $missingNumber = $maxExistingNumber + 1;
            return response()->json([
                "status" => "error",
                "message" => "Laporan $missingNumber belum ada, silakan isikan angka $missingNumber"
            ]);
        } else {
            return response()->json(["status" => "success", "message" => "Angka laporan valid"]);
        }
    }

    public function create(Request $request)
    {
        $id_kejadian = $request->query('id_kejadian');
        \Log::info('Received id_kejadian: ' . $id_kejadian);
        return view('lapsit.tambah-lapsit', ['id_kejadian' => $id_kejadian]);
    }

    public function store(Request $request)
    {
        //dd($request->all());

        // ================================= DAMPAK =================================

        $korban_terdampak = DB::table('korban_terdampak')->insertGetId([
            'jmlh_kk' => $request->jmlh_kk,
            'jmlh_jiwa' => $request->jmlh_jiwa
        ]);

        $korban_jiwa = DB::table('korban_jiwa')->insertGetId([
            'luka_berat' => $request->luka_berat,
            'luka_ringan' => $request->luka_ringan,
            'meninggal' => $request->md,
            'hilang' => $request->hilang,
            'mengungsi' => $request->mengungsi
        ]);

        $kerusakan_rumah = DB::table('kerusakan_rumah')->insertGetId([
            'rusak_berat' => $request->rusak_berat,
            'rusak_sedang' => $request->rusak_sedang,
            'rusak_ringan' => $request->rusak_ringan
        ]);

        $kerusakan_fasilitas = DB::table('kerusakan_fasilitas')->insertGetId([
            'sekolah' => $request->sekolah,
            'tempat_ibadah' => $request->tempat_ibadah,
            'rumah_sakit' => $request->rumah_sakit,
            'pasar' => $request->pasar,
            'gedung_pemerintah' => $request->gedung_pemerintah,
            'lain-lain' => $request->lain_lain
        ]);

        $kerusakan_infrastruktur = DB::table('kerusakan_infrastruktur')->insertGetId([
            'deskripsi_kerusakan' => $request->deskripsi_kerusakan
        ]);

        foreach ($request->inp as $input) {
            $shelter[] = DB::table('shelter')->insertGetId([
                'lokasi_shelter' => $input['lokasi_shelter'],
                'jumlah_kk' => $input['jumlah_kk'],
                'jumlah_jiwa' => $input['jumlah_jiwa'],
                'jumlah_laki' => $input['jumlah_laki'],
                'jumlah_perempuan' => $input['jumlah_perempuan'],
                'dibawah_lima' => $input['dibawah_lima'],
                'antara_lima_dan_delapanbelas' => $input['antara_lima_dan_delapanbelas'],
                'lebih_delapanbelas' => $input['lebih_delapanbelas'],
                'jumlah' => $input['jumlah']
            ]);
        }

        $dampak = DB::table('dampak')->insert([
            'id_korban_terdampak' => $korban_terdampak,
            'id_korban_jiwa' => $korban_jiwa,
            'id_kerusakan_rumah' => $kerusakan_rumah,
            'id_kerusakan_fasilitas' => $kerusakan_fasilitas,
            'id_kerusakan_infrastruktur' => $kerusakan_infrastruktur
        ]);

        // ================================= MOBILISASI =================================

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
            'it_telekom' => $request->it_telekom,
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

        foreach ($request->file('in') as $input) {
            $file = $input['dokumentasi'];
            $nama_dokumen = $file->getClientOriginalName(); // Mendapatkan nama asli file
            $file->move('dokumentasi/', $nama_dokumen); // Memindahkan file ke direktori yang diinginkan

            // Simpan nama file ke dalam database
            $id_dokumentasi = DB::table('dokumentasi')->insertGetId([
                'file_path' => $nama_dokumen
            ]);

            $dokumentasi[] = $id_dokumentasi;
        }

        $mobilisasi = DB::table('mobilisasi')->insert([
            'id_personil' => $personil,
            'id_tsr' => $tsr,
            'id_tdb' => $tdb
        ]);

        DB::table('mobilisasi')->insert([
            'id_personil' => $personil,
            'id_tsr' => $tsr,
            'id_tdb' => $tdb,
        ]);

        // ================================= GIAT PMI =================================

        $evakuasi_korban = DB::table('evakuasi_korban')->insertGetId([
            'luka_ringan_berat' => $request->luka_ringan_berat,
            'meninggal' => $request->meninggal
        ]);

        $giat_pmi = DB::table('giat_pmi')->insert([
            'id_evakuasi_korban' => $evakuasi_korban
        ]);   
        
        DB::table('giat_pmi')->insert([
            'id_evakuasi_korban' => $evakuasi_korban
        ]);

        foreach ($request->inpu as $input) {
            $distribusi_layanan[] = DB::table('distribusi_layanan')->insertGetId([
                'jenis_distribusi_layanan' => $input['jenis_distribusi_layanan'],
                'lokasi' => $input['lokasi'],
                'unit' => $input['unit'],
                'jumlah' => $input['jumlah']
            ]);
        }

        foreach($distribusi_layanan as $dl) {
            DB::table('layanan_korban')->insert([
                'id_giat_pmi' => $giat_pmi,
                'id_distribusi_layanan' => $dl
            ]);
        }

        // ================================= PERSONIL DIHUBUNGI =================================

        foreach ($request->inputs as $input) {
            $personil_dihubungi[] = DB::table('personil_dihubungi')->insertGetId([
                'nama_lengkap' => $input['nama_lengkap'],
                'posisi' => $input['posisi'],
                'kontak' => $input['kontak']
            ]);
            // Personil_dihubungi::create($value);
        }

        // ================================= PETUGAS POSKO =================================

        foreach ($request->input as $input) {
            $petugas_posko[] = DB::table('petugas_posko')->insertGetId([
                'nama_lengkap' => $input['nm'],
                'kontak' => $input['ktk']
            ]);
            // Personil_dihubungi::create($value);
        }

        // ================================= LAPORAN =================================
        $id_kejadian = $request->input('id_kejadian');

        $laporan = DB::table('laporan')->insertGetId([
            'id_dampak' => $dampak ?? '',
            'id_mobilisasi' => $mobilisasi ?? '',
            'id_giat_pmi' => $giat_pmi ?? '',
            'giat_pemerintah' => $request->giat_pemerintah ?? '',
            'kebutuhan' => $request->kebutuhan ?? '',
            'hambatan' => $request->hambatan ?? '',
            'nama_laporan' => $request->nama_laporan ?? '',
            'update' => $request->update ?? '2024-06-24 07:34:05.000000',
            'id_kejadian' => $request->id_kejadian // Menggunakan id_kejadian dari request
        ]);

        // ================================= TRANSACTION =================================

        foreach($shelter as $shel) {
            DB::table('transaction_shelter')->insert([
                'id_dampak' => $dampak,
                'id_lokasi_shelter' => $shel
            ]);
        }

        foreach($dokumentasi as $dokum) {
            DB::table('transaction_dokumentasi')->insert([
                'id_laporan' => $laporan,
                'id_dokumentasi' => $dokum
            ]);
        }

        foreach($personil_dihubungi as $pd) {
            DB::table('transaction_personil_dihubungi')->insert([
                'id_laporan' => $laporan,
                'id_personil_dihubungi' => $pd
            ]);
        }

        foreach($petugas_posko as $pp) {
            DB::table('transaction_petugas_posko')->insert([
                'id_laporan' => $laporan,
                'id_petugas_posko' => $pp
            ]);
        }
        // // Redirect dengan pesan sukses
        //return redirect('form-assessment');
        return redirect()->route('kejadian.view-lapsit', ['id_kejadian' => $id_kejadian]);
    }
}