<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Kejadian;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Laporan;
use Illuminate\Http\Request;


class KejadianController extends Controller
{
    public function index()
    {
        $totalData = kejadian::count();
        $dataPerPage = max(min($totalData, 10), 1);
        $kejadians = Kejadian::latest()->paginate($dataPerPage);

        return view('kejadian.kejadian', ['kejadians' => $kejadians]);
    }

    public function dashboard()
    {
        // $totalData = kejadian::count();
        // $dataPerPage = max(min($totalData, 10), 1);
        // $kejadians = Kejadian::latest()->paginate($dataPerPage);
        $kejadians = Kejadian::where('status', 'Aktif')
                    ->orWhere('status', 'Menunggu Validasi')
                    ->latest()
                    ->paginate(10);

        return view('dashboard.dashboard', compact('kejadians'));
    }

    public function add(Request $request)
    {
        //Test Input Form
        /*  $data = Request::createFromGlobals()->all();
        print_r($data);*/
        /*$validated = $request->validate([
            'nama_kejadian' => ['required'],
            'lokasi' => ['required'],
            'kecamatan' => ['required'],
            'kelurahan' => ['required'],
            'latitude' => ['required'],
            'longitude' => ['required'],
            'waktu_kejadian' => ['required'],
            'dukungan_inter' => ['required'],
            'gambaran_situasi' => ['required'],
            'akses_lokasi' => ['required'],
            'status' => ['required']
        ]);

        if (!$validated) {
            return redirect()->back()->with('error', 'Validasi data gagal!');
        }
        */
        $request = Kejadian::create($request->except('_token'));

        // Pesan : Sukses
        //$request->session()->flash('success', 'Kejadian Berhasil Ditambahkan');
        return redirect('kejadian');

        // Pesan : Gagal
    }

    public function edit($id_kejadian)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $kejadian = DB::table('kejadian')->where('id_kejadian',$id_kejadian)->get();
        $kecamatans = DB::table('kecamatan')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        //return view('kejadian.edit-kejadian',['kejadian' => $kejadian]);
        return view('kejadian.edit-kejadian', compact('kejadian','kecamatans'));
    }

    public function view($id_kejadian)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $kejadian = DB::table('kejadian')->where('id_kejadian',$id_kejadian)->get();
        $kecamatans = DB::table('kecamatan')->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        //return view('kejadian.edit-kejadian',['kejadian' => $kejadian]);
        return view('kejadian.view-kejadian', compact('kejadian','kecamatans'));
    }

    public function update(Request $request, $id_kejadian)
    {
        $kejadian = Kejadian::findOrFail($id_kejadian);
        $kejadian->update([
            'title'     => $request->title,
            'content'   => $request->content,
            'nama_kejadian' => $request->nama_kejadian,
            'lokasi' => $request->lokasi,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'waktu_kejadian' => $request->waktu_kejadian,
            'dukungan_inter' => $request->dukungan_inter,
            'gambaran_situasi' => $request->gambaran_situasi,
            'akses_lokasi' => $request->akses_lokasi,
            'status' => $request->status
        ]);

        //redirect to index
        //return redirect()->route('kejadian')->with(['success' => 'Data Berhasil Diubah!']);
        return redirect('kejadian');
    }

    public function destroy($id_kejadian)
    {
        $kejadian = Kejadian::findOrFail($id_kejadian);

        // Check if the status is 'invalid'
        if ($kejadian->status !== 'Invalid') {
            return redirect('kejadian')->with('error', 'Only kejadian with status "Invalid" can be deleted.');
        }

        // Delete the kejadian
        $kejadian->delete();

        return redirect('kejadian')->with('success', 'Kejadian deleted successfully.');
    }

    public function viewLapsit($id_kejadian)
    {
        $kejadian = Kejadian::findOrFail($id_kejadian);
        $laporans = Laporan::where('id_kejadian', $id_kejadian)->get();

        return view('lapsit.laporan-situasi', compact('kejadian', 'laporans'));
    }

    public function viewAssessor($id_kejadian)
    {
        $kejadian = DB::table('kejadian')->where('id_kejadian', $id_kejadian)->first();
        $kecamatan = DB::table('kecamatan')->where('id_kecamatan', $kejadian->kecamatan)->first();
        $assessor = DB::table('users')->where('kecamatan', $kecamatan->nama_kecamatan)->get();

        return view('kejadian.view-assessor', compact('assessor'));
    }


}
