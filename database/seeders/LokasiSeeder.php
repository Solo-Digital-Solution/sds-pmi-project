<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kecamatan')->insert([
            //insert example : ['name' => 'Developer', 'public' => true],
            // Kecamatan Banjarsari
            ['nama_kecamatan' => 'Banjarsari'],
            ['nama_kecamatan' => 'Jebres'],
            ['nama_kecamatan' => 'Laweyan'],
            ['nama_kecamatan' => 'Pasar Kliwon'],
            ['nama_kecamatan' => 'Serengan']
        ]);

        DB::table('kelurahan')->insert([
            //insert example : ['name' => 'Developer', 'public' => true],
            // Kecamatan Banjarsari
            ['nama_kelurahan' => 'Banyuanyar', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Banjarsari', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Gilingan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Joglo', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Kadipiro', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Keprabon', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Kestalan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Ketelan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Manahan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Mangkubumen', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Nusukan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Punggawan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Setabelan', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Sumber', 'id_kecamatan' => 1],
            ['nama_kelurahan' => 'Timuran', 'id_kecamatan' => 1],
            // Kecamatan Jebres
            ['nama_kelurahan' => 'Gandekan', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Jagalan', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Jebres', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Kepatihan Kulon', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Kepatihan Wetan', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Mojosongo', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Pucang Sawit', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Purwodiningrat', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Sewu', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Sudiroprajan', 'id_kecamatan' => 2],
            ['nama_kelurahan' => 'Tegalharjo', 'id_kecamatan' => 2],
            // Kecamatan Laweyan
            ['nama_kelurahan' => 'Bumi', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Jajar', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Karangasem', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Kerten', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Laweyan', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Pajang', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Panularan', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Penumping', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Purwosari', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Sondakan', 'id_kecamatan' => 3],
            ['nama_kelurahan' => 'Sriwedari', 'id_kecamatan' => 3],
            // Kecamatan Pasar Kliwon
            ['nama_kelurahan' => 'Baluwarti', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Gajahan', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Joyosuran', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Kampung Baru', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Kauman', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Kedung Lumbu', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Mojo', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Pasar Kliwon', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Sangkrah', 'id_kecamatan' => 4],
            ['nama_kelurahan' => 'Semanggi', 'id_kecamatan' => 4],
            // Kecamatan Serengan
            ['nama_kelurahan' => 'Danukusuman', 'id_kecamatan' => 5],
            ['nama_kelurahan' => 'Jayengan', 'id_kecamatan' => 5],
            ['nama_kelurahan' => 'Joyotakan', 'id_kecamatan' => 5],
            ['nama_kelurahan' => 'Kemlayan', 'id_kecamatan' => 5],
            ['nama_kelurahan' => 'Kratonan', 'id_kecamatan' => 5],
            ['nama_kelurahan' => 'Serengan', 'id_kecamatan' => 5],
            ['nama_kelurahan' => 'Tipes', 'id_kecamatan' => 5]
        ]);
    }
}
