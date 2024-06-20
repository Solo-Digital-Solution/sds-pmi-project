<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tdb')->insert([
            [
                'kend_ops' => 5,
                'truk_angkutan' => 3,
                'truk_tangki' => 2,
                'double_cabin' => 4,
                'alat_du' => 10,
                'ambulans' => 2,
                'alat_watsan' => 6,
                'rs_lapangan' => 1,
                'alat_pkdd' => 3,
                'gudang_lapangan' => 1,
                'posko_aju' => 1,
                'alat_it_lapangan' => 2,
            ],
        ]);

        DB::table('tsr')->insert([
            [
                'medis' => 5,
                'paramedis' => 4,
                'relief' => 3,
                'logistics' => 2,
                'watsan' => 2,
                'it_telekom' => 1,
                'sheltering' => 3
            ],
        ]);

        DB::table('personil')->insert([
            [
                'pengurus' => 1,
                'staf_markas' => 5,
                'relawan_pmi' => 10,
                'sukarelawan_spesialis' => 4
            ],
        ]);

        DB::table('mobilisasi')->insert([
            [
                'id_personil' => 1,
                'id_tsr' => 1,
                'id_tdb' => 1,
            ],
        ]);
    }
}
