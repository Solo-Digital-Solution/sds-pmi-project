<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
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

class ExsumController extends Controller
{
    public function index(Request $request)
    {
        $exsum = DB::table('kejadian')->join('laporan', 'kejadian.id_kejadian', '=', 'laporan.id_kejadian')
            ->join('dampak', 'laporan.id_dampak', '=', 'dampak.id_dampak')
            ->join('korban_terdampak', 'dampak.id_korban_terdampak', '=', 'korban_terdampak.id_korban_terdampak')
            ->join('korban_jiwa', 'dampak.id_korban_jiwa', '=', 'korban_jiwa.id_korban_jiwa')
            ->join('kerusakan_rumah', 'dampak.id_kerusakan_rumah', '=', 'kerusakan_rumah.id_kerusakan_rumah')
            ->join('kerusakan_fasilitas', 'dampak.id_kerusakan_fasilitas', '=', 'kerusakan_fasilitas.id_kerusakan_fasilitas')
            ->join('kerusakan_infrastruktur', 'dampak.id_kerusakan_infrastruktur', '=', 'kerusakan_infrastruktur.id_kerusakan_infrastruktur')
            ->join('transaction_shelter', 'dampak.id_dampak', '=', 'transaction_shelter.id_dampak')
            ->join('shelter', 'transaction_shelter.id_lokasi_shelter', '=', 'shelter.id_lokasi_shelter')
            ->join('mobilisasi', 'laporan.id_mobilisasi', '=', 'mobilisasi.id_mobilisasi')
            ->join('personil', 'mobilisasi.id_personil', '=', 'personil.id_personil')
            ->join('tsr', 'mobilisasi.id_tsr', '=', 'tsr.id_tsr')
            ->join('tdb', 'mobilisasi.id_tdb', '=', 'tdb.id_tdb')
            ->join('transaction_dokumentasi', 'laporan.id_laporan', '=', 'transaction_dokumentasi.id_laporan')
            ->join('dokumentasi', 'transaction_dokumentasi.id_dokumentasi', '=', 'dokumentasi.id_dokumentasi')
            ->join('giat_pmi', 'laporan.id_giat_pmi', '=', 'giat_pmi.id_giat_pmi')
            ->join('evakuasi_korban', 'giat_pmi.id_evakuasi_korban', '=', 'evakuasi_korban.id_evakuasi_korban')
            ->join('layanan_korban', 'giat_pmi.id_giat_pmi', '=', 'layanan_korban.id_giat_pmi')
            ->join('distribusi_layanan', 'layanan_korban.id_distribusi_layanan', '=', 'distribusi_layanan.id_distribusi_layanan')
            ->join('transaction_personil_dihubungi', 'laporan.id_laporan', '=', 'transaction_personil_dihubungi.id_laporan')
            ->join('personil_dihubungi', 'transaction_personil_dihubungi.id_personil_dihubungi', '=', 'personil_dihubungi.id_personil_dihubungi')
            ->join('transaction_petugas_posko', 'laporan.id_laporan', '=', 'transaction_petugas_posko.id_laporan')
            ->join('petugas_posko', 'transaction_petugas_posko.id_petugas_posko', '=', 'petugas_posko.id_petugas_posko')
            ->select('kejadian.id_kejadian', 'kejadian.nama_kejadian', 'kejadian.waktu_kejadian', 'kejadian.lokasi', 'kejadian.latitude', 'kejadian.longitude', 'kejadian.kelurahan', 'kejadian.kecamatan', 'kejadian.status', 'laporan.update', 'laporan.kebutuhan',
                'kerusakan_infrastruktur.deskripsi_kerusakan', 'korban_jiwa.luka_berat', 'korban_jiwa.luka_ringan', 'korban_jiwa.mengungsi', 'kerusakan_rumah.rusak_berat', 'kerusakan_rumah.rusak_sedang', 'kerusakan_rumah.rusak_ringan', 'distribusi_layanan.jenis_distribusi_layanan', 'distribusi_layanan.jumlah', 'distribusi_layanan.unit',
                'shelter.jumlah_laki', 'shelter.jumlah_perempuan', 'shelter.jumlah_jiwa', 'personil.relawan_pmi', 'tsr.medis', 'tsr.paramedis', 'tsr.relief', 'tsr.logistics', 'tsr.watsan', 'tsr.it_telekom', 'tsr.sheltering', 'korban_terdampak.jmlh_jiwa', 'kerusakan_fasilitas.sekolah', 'kerusakan_fasilitas.tempat_ibadah', 'kerusakan_fasilitas.rumah_sakit',
                'kerusakan_fasilitas.sekolah', 'kerusakan_fasilitas.pasar', 'kerusakan_fasilitas.gedung_pemerintah', 'personil.pengurus', 'personil.staf_markas', 'personil.relawan_pmi', 'personil.sukarelawan_spesialis', 'tdb.kend_ops', 'tdb.truk_angkutan', 'tdb.truk_tangki', 'tdb.double_cabin', 'tdb.alat_du', 'tdb.ambulans', 'tdb.alat_watsan', 'tdb.rs_lapangan',
                'tdb.alat_pkdd', 'tdb.gudang_lapangan', 'tdb.posko_aju', 'tdb.alat_it_lapangan')
            ->groupBy('kejadian.id_kejadian', 'kejadian.nama_kejadian', 'kejadian.waktu_kejadian', 'kejadian.lokasi', 'kejadian.latitude', 'kejadian.longitude', 'kejadian.kelurahan', 'kejadian.kecamatan', 'kejadian.status', 'laporan.update', 'laporan.kebutuhan',
                'kerusakan_infrastruktur.deskripsi_kerusakan', 'korban_jiwa.luka_berat', 'korban_jiwa.luka_ringan', 'korban_jiwa.mengungsi', 'kerusakan_rumah.rusak_berat', 'kerusakan_rumah.rusak_sedang', 'kerusakan_rumah.rusak_ringan', 'distribusi_layanan.jenis_distribusi_layanan', 'distribusi_layanan.jumlah', 'distribusi_layanan.unit',
                'shelter.jumlah_laki', 'shelter.jumlah_perempuan', 'shelter.jumlah_jiwa', 'personil.relawan_pmi', 'tsr.medis', 'tsr.paramedis', 'tsr.relief', 'tsr.logistics', 'tsr.watsan', 'tsr.it_telekom', 'tsr.sheltering', 'korban_terdampak.jmlh_jiwa', 'kerusakan_fasilitas.sekolah', 'kerusakan_fasilitas.tempat_ibadah', 'kerusakan_fasilitas.rumah_sakit',
                'kerusakan_fasilitas.sekolah', 'kerusakan_fasilitas.pasar', 'kerusakan_fasilitas.gedung_pemerintah', 'personil.pengurus', 'personil.staf_markas', 'personil.relawan_pmi', 'personil.sukarelawan_spesialis', 'tdb.kend_ops', 'tdb.truk_angkutan', 'tdb.truk_tangki', 'tdb.double_cabin', 'tdb.alat_du', 'tdb.ambulans', 'tdb.alat_watsan', 'tdb.rs_lapangan',
                'tdb.alat_pkdd', 'tdb.gudang_lapangan', 'tdb.posko_aju', 'tdb.alat_it_lapangan')
            ->get();

        return view('executive-summary.laporan-triwulan', compact('exsum'));
    }

    public function search(Request $request)
    {
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        $kejadian = Kejadian::whereBetween('waktu_kejadian', [$tanggalAwal, $tanggalAkhir])
            ->paginate(10);

        return view('executive-summary.laporan-triwulan', compact('kejadian'));
    }

    public function showTriwulan($id_kejadian)
    {
    $laporan = Laporan::with('dampak.shelters', 'dampak.korbanTerdampak', 'dampak.korbanJiwa', 'dampak.kerusakanRumah', 'dampak.kerusakanFasilitas', 'dampak.kerusakanInfrastruktur', 'mobilisasi.personil', 'mobilisasi.tsr', 'mobilisasi.tdb', 'giatPMI.evakuasiKorban', 'personilDihubungi', 'petugasPosko', 'dokumentasis')
        ->find($id_kejadian);

    if (!$laporan) {
        return redirect()->back()->with('error', 'Laporan tidak ditemukan');
    }

    // Mengambil koleksi dari relasi dokumentasis dan kemudian mengakses file_path
    $filePaths = $laporan->dokumentasis->pluck('file_path');

    // Menghitung jumlah shelter
    $jumlahShelter = 0;
    if ($laporan->dampak && $laporan->dampak->shelters) {
        $jumlahShelter = $laporan->dampak->shelters->count();
    }

    // Menghitung jumlah layanan air bersih
    $jumlahLayananAirBersih = Distribusi_layanan::where('jenis_distribusi_layanan', 'Layanan Air Bersih')
        ->select('jenis_distribusi_layanan', 'jumlah', 'unit')
        ->first();

    // Menghitung jumlah food item
    $jumlahFoodItem = Distribusi_layanan::where('jenis_distribusi_layanan', 'Food Item')
        ->select('jenis_distribusi_layanan', 'jumlah', 'unit')
        ->first();

    return view('executive-summary.laporan-triwulan')
        ->with('laporan', $laporan)
        ->with('jumlahShelter', $jumlahShelter)
        ->with('jumlahLayananAirBersih', $jumlahLayananAirBersih)
        ->with('jumlahFoodItem', $jumlahFoodItem)
        ->with('filePaths', $filePaths); // Mengirimkan data file_path ke view
    }
}
