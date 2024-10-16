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

        // Ambil status validasi dari kejadian
        $laporanExist = Laporan::where('id_kejadian', $id_kejadian)->exists();
        $kejadian = Kejadian::find($id_kejadian);
        $isValidated = $kejadian ? $kejadian->status == 'Aktif' : true;
        // dd($isValidated);

        return view('lapsit.laporan-situasi', ['laporans' => $laporans, 'id_kejadian' => $id_kejadian, 'isValidated' => $isValidated, 'laporanExist' => $laporanExist]);
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

        $jumlahLaporan = DB::table('laporan')->where('id_kejadian', $id_kejadian)->count();

        // Ambil data pengguna yang memiliki role_id = 3 (Pegawai PMI), termasuk no_telp
        $pegawaiPMI = DB::table('users')
            ->join('users_has_role', 'users.user_id', '=', 'users_has_role.user_id')
            ->where('users_has_role.role_id', 3)
            ->select('users.user_id', 'users.name', 'users.no_telp') // Ambil name dan no_telp
            ->get();

        // Kirim data pegawai PMI ke view
        return view('lapsit.tambah-lapsit', [
            'id_kejadian' => $id_kejadian, 
            'jumlahLaporan' => $jumlahLaporan,
            'pegawaiPMI' => $pegawaiPMI // tambahkan ini untuk dropdown
        ]);
    }

    public function createAssessment(Request $request)
    {
        $id_kejadian = $request->query('id_kejadian');
        \Log::info('Received id_kejadian: ' . $id_kejadian);

        $jumlahLaporan = DB::table('laporan')->where('id_kejadian', $id_kejadian)->count();

        return view('assessment.form-assessment', ['id_kejadian' => $id_kejadian, 'jumlahLaporan' => $jumlahLaporan]);
    }

    public function view($id_laporan)
    {
        \Log::info('ID Laporan: ' . $id_laporan);
        $laporan = DB::table('laporan')
            ->join('kejadian', 'laporan.id_kejadian', '=', 'kejadian.id_kejadian')
            ->join('dampak', 'laporan.id_dampak', '=', 'dampak.id_dampak')
            ->join('mobilisasi', 'laporan.id_mobilisasi', '=', 'mobilisasi.id_mobilisasi')
            ->join('giat_pmi', 'laporan.id_giat_pmi', '=', 'giat_pmi.id_giat_pmi')
            ->join('korban_terdampak', 'dampak.id_korban_terdampak', '=', 'korban_terdampak.id_korban_terdampak')
            ->join('korban_jiwa', 'dampak.id_korban_jiwa', '=', 'korban_jiwa.id_korban_jiwa')
            ->join('kerusakan_rumah', 'dampak.id_kerusakan_rumah', '=', 'kerusakan_rumah.id_kerusakan_rumah')
            ->join('kerusakan_fasilitas', 'dampak.id_kerusakan_fasilitas', '=', 'kerusakan_fasilitas.id_kerusakan_fasilitas')
            ->join('kerusakan_infrastruktur', 'dampak.id_kerusakan_infrastruktur', '=', 'kerusakan_infrastruktur.id_kerusakan_infrastruktur')
            ->join('personil', 'mobilisasi.id_personil', '=', 'personil.id_personil')
            ->join('tsr', 'mobilisasi.id_tsr', '=', 'tsr.id_tsr')
            ->join('tdb', 'mobilisasi.id_tdb', '=', 'tdb.id_tdb')
            ->join('evakuasi_korban', 'giat_pmi.id_evakuasi_korban', '=', 'evakuasi_korban.id_evakuasi_korban')
            ->select(
                'laporan.*',
                'kejadian.*',
                'dampak.*',
                'mobilisasi.*',
                'giat_pmi.*',
                'korban_terdampak.*',
                'korban_jiwa.*',
                'kerusakan_rumah.*',
                'kerusakan_fasilitas.*',
                'kerusakan_infrastruktur.*',
                'personil.*',
                'tsr.*',
                'tdb.*',
                'evakuasi_korban.*'
            )
            ->where('laporan.id_laporan', $id_laporan)
            ->first();

        $shelters = DB::table('shelter')
            ->join('transaction_shelter', 'shelter.id_lokasi_shelter', '=', 'transaction_shelter.id_lokasi_shelter')
            ->where('transaction_shelter.id_dampak', $laporan->id_dampak)
            ->get();

        $distribusi_layanan = DB::table('distribusi_layanan')
            ->join('layanan_korban', 'distribusi_layanan.id_distribusi_layanan', '=', 'layanan_korban.id_distribusi_layanan')
            ->where('layanan_korban.id_giat_pmi', $laporan->id_giat_pmi)
            ->get();

        $personil_dihubungi = DB::table('personil_dihubungi')
            ->join('transaction_personil_dihubungi', 'personil_dihubungi.id_personil_dihubungi', '=', 'transaction_personil_dihubungi.id_personil_dihubungi')
            ->where('transaction_personil_dihubungi.id_laporan', $id_laporan)
            ->get();

        $petugas_posko = DB::table('petugas_posko')
            ->join('transaction_petugas_posko', 'petugas_posko.id_petugas_posko', '=', 'transaction_petugas_posko.id_petugas_posko')
            ->where('transaction_petugas_posko.id_laporan', $id_laporan)
            ->get();

        $dokumentasi = DB::table('dokumentasi')
            ->join('transaction_dokumentasi', 'dokumentasi.id_dokumentasi', '=', 'transaction_dokumentasi.id_dokumentasi')
            ->where('transaction_dokumentasi.id_laporan', $id_laporan)
            ->get();

        return view('lapsit.detail-lapsit', [
            'laporan' => $laporan,
            'id_kejadian' => $laporan->id_kejadian,
            'shelters' => $shelters,
            'distribusi_layanan' => $distribusi_layanan,
            'personil_dihubungi' => $personil_dihubungi,
            'petugas_posko' => $petugas_posko,
            'dokumentasi' => $dokumentasi
        ]);
    }


    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
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

            $dampak = DB::table('dampak')->insertGetId([
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

            $mobilisasi = DB::table('mobilisasi')->insertGetId([
                'id_personil' => $personil,
                'id_tsr' => $tsr,
                'id_tdb' => $tdb
            ]);

            // Periksa apakah ada file dokumentasi yang diunggah


            // dd($request->all());
            if ($request->has('in')) {
                // dd($request->file('in')); // Debug untuk melihat struktur data
                foreach ($request->file('in') as $input) {
                    // Pastikan bahwa $input['dokumentasi'] adalah file yang valid
                    // dd($input);
                    if (isset($input['dokumentasi']) && $input['dokumentasi']->isValid()) {
                        $file = $input['dokumentasi'];
                        $nama_dokumen = $file->getClientOriginalName(); // Mendapatkan nama asli file
                        $file->move('dokumentasi/', $nama_dokumen); // Memindahkan file ke direktori yang diinginkan

                        // Simpan nama file ke dalam database
                        $id_dokumentasi = DB::table('dokumentasi')->insertGetId([
                            'file_path' => $nama_dokumen
                        ]);

                        $dokumentasi[] = $id_dokumentasi;
                    }
                }
            } else {
                $dokumentasi = [];
            }

            // ================================= GIAT PMI =================================

            $evakuasi_korban = DB::table('evakuasi_korban')->insertGetId([
                'luka_ringan_berat' => $request->luka_ringan_berat,
                'meninggal' => $request->meninggal
            ]);

            $giat_pmi = DB::table('giat_pmi')->insertGetId([
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

            foreach ($distribusi_layanan as $dl) {
                DB::table('layanan_korban')->insertGetId([
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
            }

            // ================================= PETUGAS POSKO =================================

            foreach ($request->input as $input) {
                $petugas_posko[] = DB::table('petugas_posko')->insertGetId([
                    'nama_lengkap' => $input['nm'],
                    'kontak' => $input['ktk']
                ]);
            }

            // ================================= LAPORAN =================================
            $id_kejadian = $request->input('id_kejadian');

            $jumlahLaporan = DB::table('laporan')->where('id_kejadian', $id_kejadian)->count();

            if ($jumlahLaporan == 0) {
                $penomoranLaporan = $id_kejadian . '-' . $jumlahLaporan;
                $namaLaporan = 'Lapsit-0 (Awal)';
            } elseif ($jumlahLaporan > 0) {
                $penomoranLaporan = $id_kejadian . '-' . ($jumlahLaporan);
                $namaLaporan = 'Lapsit-' . $jumlahLaporan;
            }

            DB::table('laporan')->insert([
                'id_laporan' => $penomoranLaporan,
                'id_dampak' => $dampak,
                'id_mobilisasi' => $mobilisasi,
                'id_giat_pmi' => $giat_pmi,
                'giat_pemerintah' => $request->giat_pemerintah,
                'kebutuhan' => $request->kebutuhan,
                'hambatan' => $request->hambatan,
                'nama_laporan' => $namaLaporan,
                'update' => $request->update ?? '2024-06-24 07:34:05.000000',
                'id_kejadian' => $request->id_kejadian // Menggunakan id_kejadian dari request
            ]);

            // ================================= TRANSACTION =================================

            foreach ($shelter as $shel) {
                DB::table('transaction_shelter')->insertGetId([
                    'id_dampak' => $dampak,
                    'id_lokasi_shelter' => $shel
                ]);
            }

            if (!empty($dokumentasi)) {
                foreach ($dokumentasi as $dokum) {
                    DB::table('transaction_dokumentasi')->insertGetId([
                        'id_laporan' => $penomoranLaporan,
                        'id_dokumentasi' => $dokum
                    ]);
                }
            }

            foreach ($personil_dihubungi as $pd) {
                DB::table('transaction_personil_dihubungi')->insertGetId([
                    'id_laporan' => $penomoranLaporan,
                    'id_personil_dihubungi' => $pd
                ]);
            }

            foreach ($petugas_posko as $pp) {
                DB::table('transaction_petugas_posko')->insertGetId([
                    'id_laporan' => $penomoranLaporan,
                    'id_petugas_posko' => $pp
                ]);
            }

            // Commit the transaction
            DB::commit();

            // Redirect dengan pesan sukses
            return redirect()->route('kejadian.view-lapsit', ['id_kejadian' => $id_kejadian])->with('success', 'Laporan situasi berhasil ditambahkan');

        } catch (\Exception $e) {
            // Rollback the transaction
            DB::rollBack();

            // Redirect dengan pesan error
            return redirect()->back()->with('error', 'Laporan situasi gagal ditambahkan: ' . $e->getMessage());
        }
    }

    public function show($id_laporan)
    {
        $laporan = Laporan::with('kejadian','dampak.shelters', 'dampak.korbanTerdampak', 'dampak.korbanJiwa', 'dampak.kerusakanRumah', 'dampak.kerusakanFasilitas', 'dampak.kerusakanInfrastruktur', 'mobilisasi.personil', 'mobilisasi.tsr', 'mobilisasi.tdb', 'giatPMI.evakuasiKorban', 'personilDihubungi', 'petugasPosko', 'dokumentasis')
            ->find($id_laporan);

        if (!$laporan) {
            return redirect()->back()->with('error', 'Laporan tidak ditemukan');
        }

        // Mengambil koleksi dari relasi dokumentasis dan kemudian mengakses file_path
        $filePaths = $laporan->dokumentasis->pluck('file_path');

        $jumlahShelter = 0;
        if ($laporan->dampak && $laporan->dampak->shelters) {
            $jumlahShelter = $laporan->dampak->shelters->count();
        }

        // $jumlahLayananAirBersih = Distribusi_layanan::where('jenis_distribusi_layanan', 'Layanan Air Bersih')
        //     ->select('jenis_distribusi_layanan', 'jumlah', 'unit')
        //     ->first();

        $jumlahLayananAirBersih = DB::table('laporan')
                                    ->join('layanan_korban', 'layanan_korban.id_giat_pmi', '=', 'laporan.id_giat_pmi')
                                    ->join('distribusi_layanan', 'distribusi_layanan.id_distribusi_layanan', '=', 'layanan_korban.id_distribusi_layanan')
                                    ->where('id_laporan', '=', $id_laporan)
                                    ->groupBy(['jenis_distribusi_layanan'])
                                    ->select(DB::raw('jenis_distribusi_layanan, sum(jumlah) as jumlah_distribusi_layanan'))
                                    ->get();

        $jumlahLayananPerLokasi = DB::table('laporan')
        ->join('layanan_korban', 'layanan_korban.id_giat_pmi', '=', 'laporan.id_giat_pmi')
        ->join('distribusi_layanan', 'distribusi_layanan.id_distribusi_layanan', '=', 'layanan_korban.id_distribusi_layanan')
        ->where('id_laporan', '=', $id_laporan)
        ->groupBy(['jenis_distribusi_layanan', 'lokasi'])
        ->select(DB::raw('lokasi, jenis_distribusi_layanan, sum(jumlah) as jumlah_distribusi_layanan'))
        ->get();


        // $layananPerLokasi = $jumlahLayananPerLokasi->groupBy('lokasi')->map(function ($value, $key){
        //     $kecamatan = $value->map(function ($v) {
        //         return [
        //             $v->jenis_distribusi_layanan => $v->jumlah_distribusi_layanan
        //         ];
        //     });
        //     return [
        //         $key => $kecamatan
        //         // $key => $value->map(function ($v, $k) {
        //         //     return [
        //         //         $v->jenis_distribusi_layanan => $v->jumlah_distribusi_layanan
        //         //     ];
        //         // })
        //     ];
        // });
        // dd($jumlahLayananPerLokasi->groupBy('lokasi')->toArray());
        $layananPerLokasi = $jumlahLayananPerLokasi->groupBy('lokasi')->toArray();

        $idLaporanDepan = mb_split('-', $id_laporan);
        $korban = DB::table('laporan')
        ->join('dampak', 'dampak.id_dampak', '=', 'laporan.id_dampak')
        ->join('korban_jiwa', 'korban_jiwa.id_korban_jiwa', '=', 'dampak.id_korban_jiwa')
        ->join('korban_terdampak', 'korban_terdampak.id_korban_terdampak', '=', 'dampak.id_korban_terdampak')
        ->where('id_laporan', 'like', $idLaporanDepan[0] . '-%')
        ->get();

        $fluktuasiKorban = [
            'labels' => [],
            'luka_ringan' => [],
            'luka_berat' => [],
            'jmlh_jiwa' => [],
        ];
        for ($i = 0; $i <= $idLaporanDepan[1]; $i++){
            array_push($fluktuasiKorban['labels'], 'Lapsit ' . $idLaporanDepan[0] . '-' . $i);
            array_push($fluktuasiKorban['luka_ringan'], $korban[$i]->luka_ringan);
            array_push($fluktuasiKorban['luka_berat'], $korban[$i]->luka_berat);
            array_push($fluktuasiKorban['jmlh_jiwa'], $korban[$i]->jmlh_jiwa);
        }

        $layanan = DB::table('laporan')
                                    ->join('layanan_korban', 'layanan_korban.id_giat_pmi', '=', 'laporan.id_giat_pmi')
                                    ->join('distribusi_layanan', 'distribusi_layanan.id_distribusi_layanan', '=', 'layanan_korban.id_distribusi_layanan')
                                    ->where('id_laporan', 'like', $idLaporanDepan[0] . '-%')
                                    ->groupBy(['jenis_distribusi_layanan', 'id_laporan'])
                                    ->select(DB::raw('id_laporan, jenis_distribusi_layanan, sum(jumlah) as jumlah_distribusi_layanan'))
                                    ->get();

        $fluktuasiLayanan = [
            'labels' => [],
            'food_item' => [],
            'non_food_item' => [],
            'distribusi_air_bersih' => [],
            'layanan_kesehatan' => [],
        ];

        foreach ($layanan->groupBy('id_laporan') as $key => $value){
            $temp = mb_split('-', $key);
            if ($temp[1] > $idLaporanDepan[1]){
                break;
            }
            array_push($fluktuasiLayanan['labels'], 'Lapsit ' . $key);
            array_push($fluktuasiLayanan['food_item'], $value->where('id_laporan', '=', $key)->where('jenis_distribusi_layanan', '=', 'Food Item')->first()->jumlah_distribusi_layanan ?? 0);
            array_push($fluktuasiLayanan['non_food_item'], $value->where('id_laporan', '=', $key)->where('jenis_distribusi_layanan', '=', 'Non-Food Item')->first()->jumlah_distribusi_layanan ?? 0);
            array_push($fluktuasiLayanan['distribusi_air_bersih'], $value->where('id_laporan', '=', $key)->where('jenis_distribusi_layanan', '=', 'Layanan Air Bersih')->first()->jumlah_distribusi_layanan ?? 0);
            array_push($fluktuasiLayanan['layanan_kesehatan'], $value->where('id_laporan', '=', $key)->where('jenis_distribusi_layanan', '=', 'Layanan Kesehatan')->first()->jumlah_distribusi_layanan ?? 0);
        }

        $jumlahTenagaMedis = Laporan::join('mobilisasi', 'mobilisasi.id_mobilisasi', '=', 'laporan.id_mobilisasi')
                                ->join('tsr', 'tsr.id_tsr', '=', 'mobilisasi.id_tsr')
                                ->where('id_laporan', '=', $id_laporan)
                                ->first();
        // dd($jumlahTenagaMedis);

        return view('flash-report.flash-report')
            ->with('kejadian', $laporan->kejadian)
            ->with('laporan', $laporan)
            ->with('jumlahShelter', $jumlahShelter)
            ->with('jumlahLayananAirBersih', $jumlahLayananAirBersih->where('jenis_distribusi_layanan', 'Layanan Air Bersih')->first())
            ->with('jumlahFoodItem', $jumlahLayananAirBersih->where('jenis_distribusi_layanan', 'Food Item')->first())
            ->with('jumlahLayananPerLokasi', json_encode($layananPerLokasi))
            ->with('fluktuasiKorban', json_encode($fluktuasiKorban))
            ->with('fluktuasiLayanan', json_encode($fluktuasiLayanan))
            ->with('jumlahTenagaMedis', $jumlahTenagaMedis)
            ->with('filePaths', $filePaths); // Mengirimkan data file_path ke view
    }

    public function destroy(Request $request, $id_laporan)
    {
        // Mulai transaksi
        DB::beginTransaction();
        try {
            // Ambil id_kejadian sebelum menghapus laporan
            $laporan = DB::table('laporan')->where('id_laporan', $id_laporan)->first();
            $id_kejadian = $laporan->id_kejadian;

            // Hapus data dokumentasi terkait
            $dokumentasiIds = DB::table('transaction_dokumentasi')
                ->where('id_laporan', $id_laporan)
                ->pluck('id_dokumentasi');

            foreach ($dokumentasiIds as $id_dokumentasi) {
                $filePath = DB::table('dokumentasi')->where('id_dokumentasi', $id_dokumentasi)->value('file_path');
                $fileFullPath = public_path('dokumentasi/' . $filePath); // Mendapatkan path lengkap file
                if (file_exists($fileFullPath)) {
                    unlink($fileFullPath); // Menghapus file dari direktori
                }
                DB::table('dokumentasi')->where('id_dokumentasi', $id_dokumentasi)->delete(); // Menghapus data dari tabel dokumentasi
            }

            DB::table('transaction_dokumentasi')->where('id_laporan', $id_laporan)->delete(); // Menghapus data dari tabel transaction_dokumentasi
            DB::table('laporan')->where('id_laporan', $id_laporan)->delete(); // Menghapus data laporan

            // Commit transaksi
            DB::commit();

            return redirect()->route('kejadian.view-lapsit', ['id_kejadian' => $id_kejadian])->with('success', 'Laporan berhasil dihapus.');
        } catch (\Exception $e) {
            // Rollback transaksi jika terjadi kesalahan
            DB::rollback();
            return redirect()->route('kejadian.view-lapsit', ['id_kejadian' => $id_kejadian])->with('error', 'Gagal menghapus laporan: ' . $e->getMessage());
        }
    }

}
