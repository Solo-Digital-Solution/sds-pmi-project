<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personilDihubungiId = DB::table('personil_dihubungi')->insertGetId([
            'nama_lengkap' => "John Doe",
            'posisi' => "Ka. Sie. Penanggulangan Bencana PMI Solo",
            'kontak' => "081223345567",
        ]);

        $petugasPoskoId = DB::table('petugas_posko')->insertGetId([
            'nama_lengkap' => "Jane Doe",
            'kontak' => "081223345568",
        ]);

        $dokumentasiId = DB::table('dokumentasi')->insertGetId([
            'file_path' => "dokuemntasi/example.jpg",
        ]);

        DB::table('laporan')->insert([
            'id_personil_dihubungi' => $personilDihubungiId,
            'id_personil_dihubungi' => $personilDihubungiId,
        ]);
    }
}
