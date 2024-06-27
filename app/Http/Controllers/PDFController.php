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

    public function pdf($id_laporan)
{
    // Fetch all laporan entries with the given id_laporan
    $laporans = DB::table('laporan')->where('id_laporan', $id_laporan)->orderBy('created_at', 'desc')->get();

    if ($laporans->isEmpty()) {
        return abort(404); // Handle case where no laporan is found
    }

    // Initialize an array to hold dampak and korban_terdampak data
    $allData = [];

    foreach ($laporans as $laporan) {
        // Fetch related kejadian
        $kejadians = DB::table('kejadian')->where('id_kejadian', $laporan->id_kejadian)->orderBy('created_at', 'asc')->get();

        // Fetch related dampak
        $dampak = DB::table('dampak')->where('id_dampak', $laporan->id_dampak)->orderBy('created_at', 'asc')->first();

        if (!$dampak) {
            continue; // Skip this laporan if no dampak is found
        }

        // Fetch related korban_terdampak
        $korban_terdampak = DB::table('korban_terdampak')->where('id_korban_terdampak', $dampak->id_korban_terdampak)->orderBy('created_at', 'asc')->get();

        // Collect data
        $allData[] = [
            'laporan' => $laporan,
            'kejadians' => $kejadians,
            'dampak' => $dampak,
            'korban_terdampak' => $korban_terdampak
        ];
    }

    $currentDate = date('m/d/Y');
    $currentDay = date('l');
    $currentTime = date('h:i:s A');

    $data = [
        'currentDate' => $currentDate,
        'currentDay' => $currentDay,
        'currentTime' => $currentTime,
        'allData' => $allData
    ];

    // Debugging the data
    dd($data);

    $pdf = PDF::loadView('lapsit.lapsit-pdf', $data);

    return $pdf->stream('Laporan Situasi.pdf');
}

}
