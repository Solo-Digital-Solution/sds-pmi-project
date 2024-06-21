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

        $data = [
            'title' => 'Laporan Situasi',
            'date' => date('m/d/Y'),
            'kejadians' => $kejadians,
            'laporans' => $laporans
        ];

        $pdf = PDF::loadView('lapsit.lapsit-pdf', $data);
        // $pdf = PDF::loadView('lapsit.lapsit-pdf-2');

        return $pdf->download('Laporan Situasi.pdf');
    }
}
