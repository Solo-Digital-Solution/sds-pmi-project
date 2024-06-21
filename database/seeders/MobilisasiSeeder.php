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
        $tdbId = DB::table('tdb')->insertGetId([
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

        $tsrId = DB::table('tsr')->insertGetId([
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

        $personilId =DB::table('personil')->insertGetId([
            [
                'pengurus' => 1,
                'staf_markas' => 5,
                'relawan_pmi' => 10,
                'sukarelawan_spesialis' => 4
            ],
        ]);

        DB::table('mobilisasi')->insert([
            [
                'id_personil' => $personilId,
                'id_tsr' => $tsrId,
                'id_tdb' => $tsrId,
            ],
        ]);
    }
}
