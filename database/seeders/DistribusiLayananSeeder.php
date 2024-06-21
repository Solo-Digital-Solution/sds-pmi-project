<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistribusiLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk tabel distribusi_layanan
        $distribusiLayananId = DB::table('distribusi_layanan')->insertGetId([
            'jenis_distribusi_layanan' => 'Layanan Air Bersih',
            'lokasi' => 'Pucang Sawit',
            'unit' => 'liter',
            'jumlah' => 17500,
        ]);

        // Seeder untuk tabel layanan_korban
        DB::table('layanan_korban')->insert([
            'id_distribusi_layanan' => $distribusiLayananId,
        ]);
    }
}
