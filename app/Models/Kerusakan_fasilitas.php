<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan_fasilitas extends Model
{
    use HasFactory;

    protected $table = 'kerusakan_fasilitas';
    protected $primaryKey = 'id_kerusakan_fasilitas';
    protected $fillable = [
        'sekolah',
        'tempat_ibadah',
        'rumah_sakit',
        'pasar',
        'gedung_pemerintah',
        'lain-lain'
    ];
}
