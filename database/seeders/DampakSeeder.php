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
        $korbanTerdampakId = DB::table('korban_terdampak')->insertGetId([
            [
                'jumlah_kk' => 50,
                'jumlah_jiwa' => 200
            ],
        ]);

        // Seeder untuk tabel korban_jiwa
        $korbanJiwaId = DB::table('korban_jiwa')->insertGetId([
            [
                'luka_berat' => 5,
                'luka_ringan' => 20,
                'meninggal' => 3,
                'hilang' => 2,
                'mengungsi' => 100,
            ],
        ]);

        // Seeder untuk tabel kerusakan_rumah
        $kerusakanRumahId = DB::table('kerusakan_rumah')->insertGetId([
            [
                'rusak_berat' => 10,
                'rusak_sedang' => 20,
                'rusak_ringan' => 30,
            ],
        ]);

        // Seeder untuk tabel kerusakan_fasilitas
        $korbanFasilitasId = DB::table('kerusakan_fasilitas')->insertGetId([
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
        $kerusakanInfrastrukturId = DB::table('kerusakan_infrastruktur')->insertGetId([
            [
                'deskripsi_kerusakan' => 'Jembatan utama runtuh dan jalan raya rusak parah',
            ],
        ]);

        // Seeder untuk tabel shelter
        $shelterId = DB::table('shelter')->insertGetId([
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
                'id_korban_terdampak' => $korbanTerdampakId,
                'id_korban_jiwa' => $korbanJiwaId,
                'id_kerusakan_rumah' => $kerusakanRumahId,
                'id_kerusakan_fasilitas' => $korbanFasilitasId,
                'id_kerusakan_infrastruktur' => $kerusakanInfrastrukturId,
                'id_lokasi_shelter' => $shelterId,
            ],
        ]);
    }
}
