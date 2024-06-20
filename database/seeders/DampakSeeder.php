<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DampakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk tabel korban_terdampak
        DB::table('korban_terdampak')->insert([
            [
                'jumlah_kk' => 50,
                'jumlah_jiwa' => 200
            ],
        ]);

        // Seeder untuk tabel korban_jiwa
        DB::table('korban_jiwa')->insert([
            [
                'luka_berat' => 5,
                'luka_ringan' => 20,
                'meninggal' => 3,
                'hilang' => 2,
                'mengungsi' => 100,
            ],
        ]);

        // Seeder untuk tabel kerusakan_rumah
        DB::table('kerusakan_rumah')->insert([
            [
                'rusak_berat' => 10,
                'rusak_sedang' => 20,
                'rusak_ringan' => 30,
            ],
        ]);

        // Seeder untuk tabel kerusakan_fasilitas
        DB::table('kerusakan_fasilitas')->insert([
            [
                'sekolah' => 2,
                'tempat_ibadah' => 1,
                'rumah_sakit' => 1,
                'pasar' => 1,
                'gedung_pemerintah' => 1,
                'lain-lain' => 3,
            ],
        ]);

        // Seeder untuk tabel kerusakan_infrastruktur
        DB::table('kerusakan_infrastruktur')->insert([
            [
                'deskripsi_kerusakan' => 'Jembatan utama runtuh dan jalan raya rusak parah',
            ],
        ]);

        // Seeder untuk tabel shelter
        DB::table('shelter')->insert([
            [
                'lokasi_shelter' => 'Lapangan sepak bola desa',
                'jumlah_kk' => 20,
                'jumlah_jiwa' => 80,
                'jumlah' => 80,
                'jumlah_laki' => 40,
                'jumlah_perempuan' => 40,
                'dibawah_lima' => 10,
                'antara_lima_dan_delapanbelas' => 30,
                'lebih_delapanbelas' => 40,
            ],
        ]);

        // Seeder untuk tabel dampak
        DB::table('dampak')->insert([
            [
                'id_korban_terdampak' => 1,
                'id_korban_jiwa' => 1,
                'id_kerusakan_rumah' => 1,
                'id_kerusakan_fasilitas' => 1,
                'id_kerusakan_infrastruktur' => 1,
                'id_lokasi_shelter' => 1,
            ],
        ]);
    }
}
