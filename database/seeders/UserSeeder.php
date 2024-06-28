<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //insert example : ['name' => 'Developer', 'public' => true],
            // Kecamatan Banjarsari
            ['user_id' => '124392','nik' => '62792400','name' => 'Admin PMI','email' => 'admin@email.com','tempat_lahir' => 'RS Admin','tanggal_lahir' => '1999-01-19', 'kecamatan' => '2','kelurahan' => 'Jagalan','alamat' => 'Alamat Admin','goldar' => 'A','no_telp' => '23456789', 'username' => 'admin','gender' => 'Laki-Laki','ktp' => '1231414.png','profilePhoto' => '123456.png', 'password' => Hash::make('sandiadmin')],
            ['user_id' => '312937','nik' => '45678976','name' => 'Relawan','email' => 'relawan@email.com','tempat_lahir' => 'RS Relawan','tanggal_lahir' => '1999-01-20', 'kecamatan' => '2','kelurahan' => 'Jagalan','alamat' => 'Alamat Relawan','goldar' => 'B','no_telp' => '34567839', 'username' => 'Relawan','gender' => 'Perempuan','ktp' => '1231414.png','profilePhoto' => '123456.png', 'password' => Hash::make('sandirelawan')],
            ['user_id' => '456789','nik' => '3894890','name' => 'Executive','email' => 'executive@email.com','tempat_lahir' => 'RS Admin','tanggal_lahir' => '1999-01-21', 'kecamatan' => '2','kelurahan' => 'Jagalan','alamat' => 'Alamat Executive','goldar' => 'O','no_telp' => '2374291', 'username' => 'Executive','gender' => 'Laki-Laki','ktp' => '1231414.png','profilePhoto' => '123456.png', 'password' => Hash::make('sandiexecutive')],
            ['user_id' => '876542','nik' => '34397324','name' => 'HRD','email' => 'hrd@email.com','tempat_lahir' => 'RS HRD','tanggal_lahir' => '1999-01-22', 'kecamatan' => '2','kelurahan' => 'Jagalan','alamat' => 'Alamat HRD','goldar' => 'AB','no_telp' => '3472597', 'username' => 'HRD','gender' => 'Laki-Laki','ktp' => '1231414.png','profilePhoto' => '123456.png', 'password' => Hash::make('sandihrd')]
        ]);

        DB::table('users_has_role')->insert([
            //insert example : ['name' => 'Developer', 'public' => true],
            // Kecamatan Banjarsari
            ['user_id' => '124392','role_id' => 3],
            ['user_id' => '312937','role_id' => 4],
            ['user_id' => '456789','role_id' => 1],
            ['user_id' => '876542','role_id' => 2]
        ]);

    }
}
