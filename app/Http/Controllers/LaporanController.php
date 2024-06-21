<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korban_terdampak;
use Illuminate\Support\Facades\DB;
<<<<<<< HEAD
use App\Models\Personil_dihubungi; // Pastikan untuk mengimpor model Personil_dihubungi
=======
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
// use App\Models\Korban_terdampak;
use App\Models\Layanan_korban;
use App\Models\Mobilisasi;
use App\Models\Personil;
use App\Models\Personil_dihubungi;
use App\Models\Petugas_posko;
use App\Models\Shelter;
use App\Models\Tdb;
use App\Models\Tsr;
>>>>>>> origin/main

class LaporanController extends Controller
{
    public function index()
    {
        $totalData = laporan::count();
        $dataPerPage = max(min($totalData, 10), 1);
        $laporans = Laporan::latest()->paginate($dataPerPage);

        return view('lapsit.laporan-situasi', ['laporans' => $laporans]);
    }

    public function store(Request $request)
    {
        // $korban_terdampak = DB::table('korban_terdampak')->insertGetId([
        //     'id_korban_terdampak' => $request->id_korban_terdampak,
        //     'jumlah_kk' => $request->jumlah_kk,
        //     'jumlah_jiwa' => $request->jumlah_jiwa
        // ]);

        // $korban_jiwa = DB::table('korban_jiwa')->insertGetId([
        //     'id_korban_jiwa' => $request->id_korban_jiwa,
        //     'luka_berat' => $request->luka_berat,
        //     'luka_ringan' => $request->luka_ringan,
        //     'meninggal' => $request->meninggal,
        //     'hilang' => $request->hilang,
        //     'mengungsi' => $request->mengungsi
        // ]);

        // $kerusakan_rumah = DB::table('kerusakan_rumah')->insertGetId([
        //     'id_kerusakan_rumah' => $request->id_kerusakan_rumah,
        //     'rusak_berat' => $request->rusak_berat,
        //     'rusak_sedang' => $request->rusak_sedang,
        //     'rusak_ringan' => $request->rusak_ringan
        // ]);

        // $kerusakan_fasilitas = DB::table('kerusakan_fasilitas')->insertGetId([
        //     'id_kerusakan_fasilitas' => $request->id_kerusakan_fasilitas,
        //     'sekolah' => $request->sekolah,
        //     'tempat_ibadah' => $request->tempat_ibadah,
        //     'rumah_sakit' => $request->rumah_sakit,
        //     'pasar' => $request->pasar,
        //     'gedung_pemerintah' => $request->gedung_pemerintah,
        //     'lain-lain' => $request->lain_lain
        // ]);

        // $kerusakan_infrastruktur = DB::table('kerusakan_infrastruktur')->insertGetId([
        //     'id_kerusakan_infrastruktur' => $request->id_kerusakan_infrastruktur,
        //     'deskripsi_kerusakan' => $request->deskripsi_kerusakan
        // ]);

        // $shelter = DB::table('shelter')->insertGetId([
        //     'id_lokasi_shelter' => $request->id_lokasi_shelter,
        //     'lokasi_shelter' => $request->lokasi_shelter,
        //     'jumlah_kk' => $request->jumlah_kk,
        //     'jumlah_jiwa' => $request->jumlah_jiwa,
        //     'jumlah_laki' => $request->jumlah_laki,
        //     'jumlah_perempuan' => $request->jumlah_perempuan,
        //     'dibawah_lima' => $request->dibawah_lima,
        //     'antara_lima_dan_delapanbelas' => $request->antara_lima_dan_delapanbelas,
        //     'lebih_delapanbelas' => $request->lebih_delapanbelas,
        //     'jumlah' => $request->jumlah
        // ]);

        // $dampak = DB::table('dampak')->insert([
        //     'id_korban_terdampak' => $korban_terdampak,
        //     'id_korban_jiwa' => $korban_jiwa,
        //     'id_kerusakan_rumah' => $kerusakan_rumah,
        //     'id_kerusakan_fasilitas' => $kerusakan_fasilitas,
        //     'id_kerusakan_infrastruktur' => $kerusakan_infrastruktur,
        //     'id_lokasi_shelter' => $shelter
        // ]);

        // $personil = DB::table('personil')->insertGetId([
        //     'id_personil' => $request->id_personil,
        //     'pengurus' => $request->pengurus,
        //     'staf_markas' => $request->staf_markas,
        //     'relawan_pmi' => $request->relawan_pmi,
        //     'sukarelawan_spesialis' => $request->sukarelawan_spesialis
        // ]);

        // $tsr = DB::table('tsr')->insertGetId([
        //     'id_tsr' => $request->id_tsr,
        //     'medis' => $request->medis,
        //     'paramedis' => $request->paramedis,
        //     'relief' => $request->relief,
        //     'logistics' => $request->logistics,
        //     'watsan' => $request->watsan,
        //     'it_telekom' => $request->it_telekom,
        //     'sheltering' => $request->sheltering
        // ]);

        // $tdb = DB::table('tdb')->insertGetId([
        //     'id_tdb' => $request->id_tdb,
        //     'kend_ops' => $request->kend_ops,
        //     'truk_angkutan' => $request->truk_angkutan,
        //     'truk_tangki' => $request->truk_tangki,
        //     'double_cabin' => $request->double_cabin,
        //     'alat_du' => $request->alat_du,
        //     'ambulans' => $request->ambulans,
        //     'alat_watsan' => $request->alat_watsan,
        //     'rs_lapangan' => $request->rs_lapangan,
        //     'alat_pkdd' => $request->alat_pkdd,
        //     'gudang_lapangan' => $request->gudang_lapangan,
        //     'posko_aju' => $request->posko_aju,
        //     'alat_it_lapangan' => $request->alat_it_lapangan
        // ]);

        // $mobilisasi = DB::table('mobilisasi')->insert([
        //     'id_personil' => $personil,
        //     'id_tsr' => $tsr,
        //     'id_tdb' => $tdb
        // ]);

        $evakuasi_korban = DB::table('evakuasi_korban')->insertGetId([
            'id_evakuasi_korban' => $request->id_evakuasi_korban,
            'luka_ringan_berat' => $request->luka_ringan_berat,
            'meninggal' => $request->meninggal
        ]);

<<<<<<< HEAD
=======
        $distribusi_layanan = DB::table('distribusi_layanan')->insertGetId([
            'id_distribusi_layanan' => $request->id_distribusi_layanan,
            'jenis_distribusi_layanan' => $request->jenis_distribusi_layanan,
            'lokasi' => $request->lokasi,
            'unit' => $request->unit,
            'jumlah' => $request->jumlah
        ]);

>>>>>>> origin/main
        $giat_pmi = DB::table('giat_pmi')->insert([
            'id_evakuasi_korban' => $evakuasi_korban
        ]);

<<<<<<< HEAD
        foreach ($request->inpu as $input) {
            $distribusi_layanan[] = DB::table('distribusi_layanan')->insertGetId([
                'jenis_distribusi_layanan' => $input['jenis_distribusi_layanan'],
                'lokasi' => $input['lokasi'],
                'unit' => $input['unit'],
                'jumlah' => $input['jumlah']
            ]);
        }
=======
        $layanan_korban = DB::table('layanan_korban')->insert([
            'id_giat_pmi' => $giat_pmi,
            'id_distribusi_layanan' => $distribusi_layanan
        ]);
>>>>>>> origin/main

        // dd($distribusi_layanan);

        foreach($distribusi_layanan as $dl) {
            $layanan_korban = DB::table('layanan_korban')->insert([
                'id_giat_pmi' => $giat_pmi,
                'id_distribusi_layanan' => $dl
            ]);
        }

        $laporan = DB::table('laporan')->insertGetId([
            'id_dampak' => $dampak ?? '',
            'id_mobilisasi' => $mobilisasi ?? '',
            'id_giat_pmi' => $giat_pmi ?? '',
            'id_personil_dihubungi' => $personil_dihubungi ?? '',
            'id_petugas_posko' => $petugas_posko ?? '',
            'id_dokumentasi' => $dokumentasi ?? '',
            'giat_pemerintah' => $request->giat_pemerintah ?? '',
            'kebutuhan' => $request->kebutuhan ?? '',
            'hambatan' => $request->hambatan ?? '',
            'nama_laporan' => $request->nama_laporan ?? '',
            'update' => $request->update ?? '' // Mengatur 'update' ke null jika tidak ada nilai yang diberikan
        ]);

        foreach($personil_dihubungi as $pd) {
            $transaction_personil_dihubungi = DB::table('transaction_personil_dihubungi')->insert([
                'id_laporan' => $laporan,
                'id_personil_dihubungi' => $pd
            ]);
        }

        foreach($petugas_posko as $pp) {
            $transaction_petugas_posko = DB::table('transaction_petugas_posko')->insert([
                'id_laporan' => $laporan,
                'id_petugas_posko' => $pp
            ]);
        }

        $file = $request->file('dokumentasi');
        $nama_dokumen = $request->file('dokumentasi')->getClientOriginalName();
        $file->move('dokuemntasi/', $nama_dokumen);

        $dokumentasi = DB::table('dokumentasi')->insert([
            'file_path' => $nama_dokumen
        ]);

<<<<<<< HEAD
        //dd($request->all());
=======
        $laporan = DB::table('laporan')->insertGetId([
            'id_dampak' => $dampak,
            'id_kejadian' => 1,
            'id_mobilisasi' => $mobilisasi,
            'id_giat_pmi' => $giat_pmi,
            'id_personil_dihubungi' => $personil_dihubungi,
            'id_petugas_posko' => $petugas_posko,
            'id_dokumentasi' => $dokumentasi,
            'giat_pemerintah' => $request->giat_pemerintah,
            'kebutuhan' => $request->kebutuhan,
            'hambatan' => $request->hambatan,
            'nama_laporan' => $request->nama_laporan,
            'update' => $request->update ?? null // Mengatur 'update' ke null jika tidak ada nilai yang diberikan
        ]);
>>>>>>> origin/main


        // DB::table('mobilisasi')->insert([
        //     'id_personil' => $personil,
        //     'id_tsr' => $tsr,
        //     'id_tdb' => $tdb,
        // ]);

        // $evakuasi_korban = DB::table('evakuasi_korban')->insertGetId([
        //     'id_evakuasi_korban' => $request->id_evakuasi_korban,
        //     'luka_ringan_berat' => $request->luka_ringan_berat,
        //     'meninggal' => $request->meninggal
        // ]);

<<<<<<< HEAD
        

        // foreach ($request->inputs as $input) {
        //     DB::table('personil_dihubungi')->insert([
        //         'nama_lengkap' => $input['nama_lengkap'],
        //         'posisi' => $input['posisi'],
        //         'kontak' => $input['kontak']
        //     ]);
        //     // Personil_dihubungi::create($value);
        // }


        // foreach ($request->input as $input) {
        //     DB::table('petugas_posko')->insert([
        //         'nama_lengkap' => $input['nm'],
        //         'kontak' => $input['ktk']
        //     ]);
        //     // Personil_dihubungi::create($value);
        // }

        //dd($request->all());

        
=======
        // $distribusi_layanan = DB::table('distribusi_layanan')->insertGetId([
        //     // 'id_distribusi_layanan' => $request->id_distribusi_layanan,
        //     'jenis_distribusi_layanan' => $request->jenis_distribusi_layanan,
        //     'lokasi' => $request->lokasi,
        //     'unit' => $request->unit,
        //     'jumlah' => $request->jumlah
        // ]);
>>>>>>> origin/main

        // DB::table('giat_pmi')->insert([
        //     'id_evakuasi_korban' => $evakuasi_korban
        // ]);

        // DB::table('layanan_korban')->insert([
        //     'id_giat_pmi' => $giat_pmi,
        //     'id_distribusi_layanan' => $distribusi_layanan
        // ]);


        // // Return back with success message
        // return back()->with('sukses', 'The post has been added');



        // dd($request->all());
        // DB::beginTransaction();
        
    
        // foreach ($request->nm as $key => $value) {
        //     $personil_dihubungi = DB::table('personil_dihubungi')->insert([
        //         'nama_lengkap' => $request->nm[$key],
        //         'posisi' => $request->posisi[$key],
        //         'kontak' => $request->kntk[$key],
                
        //     ]);
        // }

        // DB::commit();
        //return redirect()->route('laporan-situasi')->with('success', 'Data berhasil disimpan.');



        // $petugas_posko = DB::table('petugas_posko')->insertGetId([
        //     'id_petugas_posko' => $request->id_petugas_posko,
        //     'nama_lengkap' => $request->nama_lengkap,
        //     'kontak' => $request->kontak
        // ]);






        // $tdb = DB::table('dokumentasi')->insertGetId([
        //     'id_dokumentasi' => $request->id_dokumentasi,
        //     'file_path' => $request->file_path
        // ]);



        // $folder = 'public/dokumentasi';

        // // Array untuk menyimpan path file
        // $filePaths = [];

        // // Proses setiap file yang diunggah
        // if($request->hasFile('dokumentasi')) {
        //     foreach ($request->file('dokumentasi') as $file) {
        //         // Simpan file dan ambil path-nya
        //         $path = $file->store($folder);
        //         // Ubah path ke format yang sesuai untuk penyimpanan database
        //         $publicPath = str_replace('public/', 'dokumentasi/', $path);
        //         // Tambahkan path ke array
        //         $filePaths[] = $publicPath;
        //     }
        // }

        // // Simpan path file ke database
        // foreach ($filePaths as $filePath) {
        //     $tdb = DB::table('dokumentasi')->insertGetId([
        //         'id_dokumentasi' => $request->id_dokumentasi,
        //         'file_path' => $filePath
        //     ]);
        // }

        // // Redirect dengan pesan sukses
        //return redirect('laporan-situasi');
    }
}
