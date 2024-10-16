<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {

        $kejadians = DB::table('kejadian')->get();
        $laporans = DB::table('laporan')->get();

        $currentDate = date('m/d/Y');
        $currentDay = date('l');
        $currentTime = date('h:i:s A');

        $data = [
            'currentDate' => $currentDate,
            'currentDay' => $currentDay,
            'currentTime' => $currentTime,
            'kejadians' => $kejadians,
            'laporans' => $laporans
        ];

        $pdf = PDF::loadView('lapsit.lapsit-pdf', $data);

        return $pdf->stream('Laporan Situasi.pdf');
    }

    public function pdf($id_kejadian)
    {
        // Fetch all laporan entries with the given id_kejadian
        $laporans = DB::table('laporan')->where('id_kejadian', $id_kejadian)->orderBy('created_at', 'desc')->get();

        if ($laporans->isEmpty()) {
            return abort(404); // Handle case where no laporan is found
        }

        // Find the index of the pressed laporan
        $index = $laporans->search(function($laporan) use ($id_kejadian) {
            return $laporan->id_laporan == $id_kejadian;
        });

        if ($index === false) {
            return abort(404); // Handle case where the specific laporan is not found
        }

        // Slice the array up to the index of the pressed laporan
        $laporans = $laporans->slice(0, $index + 1);

        // Split the laporan data into chunks of 8
        $chunks = $laporans->chunk(8);

        // Get the chunk that contains the specific laporan
        $specificChunkIndex = floor($index / 8); // Calculate which chunk contains the specific laporan

        // Select the correct chunk
        $chunk1 = $chunks[$specificChunkIndex];

        // If there's a previous chunk, merge its data into the current chunk
        if ($specificChunkIndex > 0) {
            $previousChunk = $chunks[$specificChunkIndex - 1];
            $lastLaporanPreviousChunk = $previousChunk->last(); // Get the last laporan from the previous chunk
            // Ensure $lastLaporanPreviousChunk exists and merge its data into $chunk
            if ($lastLaporanPreviousChunk) {
                $chunk1 = collect([$lastLaporanPreviousChunk])->merge($chunk1); // Merge only the last laporan from previous chunk into $chunk
            }
        }

        $lastLaporan = $chunk1->last();

        // Now $chunk contains all the laporan data needed for PDF generation
        // dd($chunk);

        $pdfFiles = [];

        foreach ($chunk1 as $chunkIndex => $chunk) {
            // Initialize arrays to store related data
            $kejadian = [];
            $dampaks = [];
            $korban_terdampak = [];
            $korban_jiwa = [];
            $kerusakan_rumah = [];
            $kerusakan_fasilitas = [];
            $kerusakan_infrastruktur = [];
            $mobilisasi = [];
            $personil = [];
            $tsr = [];
            $tdb = [];
            $giat_pmi = [];
            $evakuasi_korban = [];
            $layanan_korban = [];
            $transaction_shelter = [];
            $transaction_dokumentasi = [];
            $transaction_personil_dihubungi = [];
            $transaction_petugas_posko = [];
            $distribusi_layanans = [];

            foreach ($chunk1 as $laporan) {
                // Fetch related kejadian
                // dd($laporan->id_kejadian);
                $kejadian = DB::table('kejadian')->where('id_kejadian', $laporan->id_kejadian)->orderBy('created_at', 'asc')->get();

                // Fetch related dampak
                $dampak = DB::table('dampak')->where('id_dampak', $laporan->id_dampak)->orderBy('created_at', 'asc')->first();

                if ($dampak) {
                    $korban_terdampak_items = DB::table('korban_terdampak')->where('id_korban_terdampak', $dampak->id_korban_terdampak)->orderBy('created_at', 'asc')->get();
                    $korban_terdampak = array_merge($korban_terdampak, $korban_terdampak_items->toArray());

                    $korban_jiwa_items = DB::table('korban_jiwa')->where('id_korban_jiwa', $dampak->id_korban_jiwa)->orderBy('created_at', 'asc')->get();
                    $korban_jiwa = array_merge($korban_jiwa, $korban_jiwa_items->toArray());

                    $kerusakan_rumah_items = DB::table('kerusakan_rumah')->where('id_kerusakan_rumah', $dampak->id_kerusakan_rumah)->orderBy('created_at', 'asc')->get();
                    $kerusakan_rumah = array_merge($kerusakan_rumah, $kerusakan_rumah_items->toArray());

                    $kerusakan_fasilitas_items = DB::table('kerusakan_fasilitas')->where('id_kerusakan_fasilitas', $dampak->id_kerusakan_fasilitas)->orderBy('created_at', 'asc')->get();
                    $kerusakan_fasilitas = array_merge($kerusakan_fasilitas, $kerusakan_fasilitas_items->toArray());

                    $kerusakan_infrastruktur_items = DB::table('kerusakan_infrastruktur')->where('id_kerusakan_infrastruktur', $dampak->id_kerusakan_infrastruktur)->orderBy('created_at', 'asc')->get();
                    $kerusakan_infrastruktur = array_merge($kerusakan_infrastruktur, $kerusakan_infrastruktur_items->toArray());

                    // Fetch transaction_shelter related to dampak
                    $transaction_shelter_items = DB::table('transaction_shelter')->join('shelter', 'transaction_shelter.id_lokasi_shelter', '=', 'shelter.id_lokasi_shelter')
                        ->where('id_dampak', $dampak->id_dampak)
                        ->select('shelter.lokasi_shelter', 'shelter.jumlah_kk', 'shelter.jumlah_jiwa', 'shelter.lokasi_shelter', 'shelter.jumlah_laki', 'shelter.jumlah_perempuan', 'shelter.dibawah_lima', 'shelter.antara_lima_dan_delapanbelas', 'shelter.lebih_delapanbelas', 'shelter.jumlah')
                        ->get();
                    $transaction_shelter = array_merge($transaction_shelter, $transaction_shelter_items->toArray());
                }

                // Fetch related mobilisasi
                $mobilisasi = DB::table('mobilisasi')->where('id_mobilisasi', $laporan->id_mobilisasi)->orderBy('created_at', 'asc')->first();
                if ($mobilisasi) {
                    $personil_items = DB::table('personil')->where('id_personil', $mobilisasi->id_personil)->orderBy('created_at', 'asc')->get();
                    $personil = array_merge($personil, $personil_items->toArray());

                    $tsr_items = DB::table('tsr')->where('id_tsr', $mobilisasi->id_tsr)->orderBy('created_at', 'asc')->get();
                    $tsr = array_merge($tsr, $tsr_items->toArray());

                    $tdb_items = DB::table('tdb')->where('id_tdb', $mobilisasi->id_tdb)->orderBy('created_at', 'asc')->get();
                    $tdb = array_merge($tdb, $tdb_items->toArray());
                }

                // Fetch related giat_pmi
                $giat_pmi = DB::table('giat_pmi')->where('id_giat_pmi', $laporan->id_giat_pmi)->orderBy('created_at', 'asc')->first();
                if ($giat_pmi) {
                    $evakuasi_korban_items = DB::table('evakuasi_korban')->where('id_evakuasi_korban', $giat_pmi->id_evakuasi_korban)->orderBy('created_at', 'asc')->get();
                    $evakuasi_korban = array_merge($evakuasi_korban, $evakuasi_korban_items->toArray());

                    // Fetch layanan_korban related to giat_pmi
                    $layanan_korban_items = DB::table('layanan_korban')->where('id_giat_pmi', $giat_pmi->id_giat_pmi)->get();
                    $layanan_korban = array_merge($layanan_korban, $layanan_korban_items->toArray());

                    // Fetch distribusi_layanan based on id_giat_pmi from layanan_korban
                    foreach ($layanan_korban_items as $item) {
                        $distribusi_layanan = DB::table('distribusi_layanan')->where('id_distribusi_layanan', $item->id_distribusi_layanan)->first();

                        if ($distribusi_layanan) {
                            $distribusi_layanans[] = $distribusi_layanan;
                        }
                    }
                }

                // Fetch transaction_dokumentasi related to laporan
                $transaction_dokumentasi_items = DB::table('transaction_dokumentasi')
                    ->join('dokumentasi', 'transaction_dokumentasi.id_dokumentasi', '=', 'dokumentasi.id_dokumentasi')
                    ->where('transaction_dokumentasi.id_laporan', $laporan->id_laporan)
                    ->select('dokumentasi.file_path') // Fetch the image path
                    ->get();
                //dd($transaction_dokumentasi_items);
                $transaction_dokumentasi = array_merge($transaction_dokumentasi, $transaction_dokumentasi_items->toArray());

                // Fetch transaction_personil_dihubungi related to laporan
                $transaction_personil_dihubungi_items = DB::table('transaction_personil_dihubungi')
                    ->join('personil_dihubungi', 'transaction_personil_dihubungi.id_personil_dihubungi', '=', 'personil_dihubungi.id_personil_dihubungi')
                    ->where('transaction_personil_dihubungi.id_laporan', $laporan->id_laporan)
                    ->select('personil_dihubungi.nama_lengkap', 'personil_dihubungi.posisi', 'personil_dihubungi.kontak') // Fetch the name of the contacted person
                    ->get();
                $transaction_personil_dihubungi = array_merge($transaction_personil_dihubungi, $transaction_personil_dihubungi_items->toArray());

                // Fetch transaction_petugas_posko related to laporan
                $transaction_petugas_posko_items = DB::table('transaction_petugas_posko')
                    ->join('petugas_posko', 'transaction_petugas_posko.id_petugas_posko', '=', 'petugas_posko.id_petugas_posko')
                    ->where('transaction_petugas_posko.id_laporan', $laporan->id_laporan)
                    ->select('petugas_posko.nama_lengkap', 'petugas_posko.kontak') // Fetch the name of the POSKO officer
                    ->get();
                $transaction_petugas_posko = array_merge($transaction_petugas_posko, $transaction_petugas_posko_items->toArray());
            }

            // Generate the PDF for the current chunk
            $pdf = PDF::loadView('lapsit.lapsit-pdf', [
                'laporans' => $chunk1,
                'laporan_terakhir' => $lastLaporan,
                'kejadians' => $kejadian,
                'dampaks' => $dampaks,
                'korban_terdampak' => $korban_terdampak,
                'korban_jiwa' => $korban_jiwa,
                'kerusakan_rumah' => $kerusakan_rumah,
                'kerusakan_fasilitas' => $kerusakan_fasilitas,
                'kerusakan_infrastruktur' => $kerusakan_infrastruktur,
                'mobilisasi' => $mobilisasi,
                'personil' => $personil,
                'tsr' => $tsr,
                'tdb' => $tdb,
                'giat_pmi' => $giat_pmi,
                'evakuasi_korban' => $evakuasi_korban,
                'layanan_korban' => $layanan_korban,
                'transaction_shelter' => $transaction_shelter,
                'transaction_dokumentasi' => $transaction_dokumentasi,
                'transaction_personil_dihubungi' => $transaction_personil_dihubungi,
                'transaction_petugas_posko' => $transaction_petugas_posko,
                'distribusi_layanans' => $distribusi_layanans
            ]);

            // Save the PDF file to a specific location with a unique name
            // $fileName = 'pdf_report_' . $id_kejadian . '_part_' . ($chunkIndex + 1) . '.pdf';
            // $pdf->save(storage_path('app/public/pdf_reports/' . $fileName));

            // // Store the PDF file path
            // $pdfFiles[] = storage_path('app/public/pdf_reports/' . $fileName);
        }

        // Optionally, you can return the first PDF file as a response or handle it as needed
        return $pdf->stream('Laporan Situasi.pdf');
    }

}
