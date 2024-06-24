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

        $pdf = PDF::loadView('lapsit.lapsit-pdf-3', $data);

        return $pdf->stream('Laporan Situasi.pdf');
    }
}
