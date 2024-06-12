<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Kejadian;
use Illuminate\Http\Request;

class ExsumController extends Controller
{
    public function index()
    {
        $totalData = Kejadian::count();
        $dataPerPage = max(min($totalData, 10), 1);

        $kejadian = Kejadian::latest()->paginate($dataPerPage);

        return view('executive-summary.exsum', compact('kejadian'));
    }

    public function search(Request $request)
    {
        $tanggalAwal = $request->input('tanggal_awal');
        $tanggalAkhir = $request->input('tanggal_akhir');

        $kejadian = Kejadian::whereBetween('waktu_kejadian', [$tanggalAwal, $tanggalAkhir])
                        ->paginate(10);

        return view('executive-summary.exsum', compact('kejadian'));
    }
}
