<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kejadian',
        'lokasi',
        'waktu_kejadian',
        'update',
        'dukungan_inter',
        'gambaran_situasi',
        'akses_lokasi',
        'status'
    ];
}
