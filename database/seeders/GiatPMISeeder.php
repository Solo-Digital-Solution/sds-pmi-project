<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GiatPMISeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk tabel evakuasi korban
        $evakuasiKorbanId = DB::table('evakuasi_korban')->insertGetId([
            'luka_ringan_berat' => 5,
            'meninggal' => 0,
        ]);

        // Seeder untuk tabel giat pmi
        $giatPMIId = DB::table('giat_pmi')->insertGetId([
            'id_evakuasi_korban' => $evakuasiKorbanId,
        ]);

        DB::table('layanan_korban')->insert([
            'id_giat_pmi' => $giatPMIId,
        ]);
    }
}
