<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    use HasFactory;

    protected $table = 'kejadian';

    protected $fillable = [
        'nama_kejadian',
        'lokasi',
        'kecamatan',
        'kelurahan',
        'latitude',
        'longitude',
        'waktu_kejadian',
        'dukungan_inter',
        'gambaran_situasi',
        'akses_lokasi',
        'status'
    ];
}
