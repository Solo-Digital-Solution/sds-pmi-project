<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WhatsAppController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'gambar' => 'required|file|mimes:jpg,jpeg,png'
        ]);

        $client = new Client();
        $response = $client->post('http://localhost:4001/kirim', [
            'multipart' => [
                [
                    'name'     => 'nowa',
                    'contents' => $request->input('nowa')
                ],
                [
                    'name'     => 'pesan',
                    'contents' => $request->input('pesan')
                ],
                [
                    'name'     => 'gambar',
                    'contents' => fopen($request->file('gambar')->getPathname(), 'r'),
                    'filename' => $request->file('gambar')->getClientOriginalName()
                ]
            ]
        ]);

        return response()->json(['status' => 'Pesan telah dikirim ke semua nomor']);
    }

    public function form()
    {
        return view('flash-report.kirimpesan');
    }
}