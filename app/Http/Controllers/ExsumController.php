<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Kejadian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExsumController extends Controller
{
    public function index()
    {
        $totalData = Kejadian::count();
        $dataPerPage = max(min($totalData, 10), 1);

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
}
