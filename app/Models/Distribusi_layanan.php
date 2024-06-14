<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi_layanan extends Model
{
    use HasFactory;

    protected $table = 'distribusi_layanan';
    protected $primaryKey = 'id_distribusi_layanan';
    protected $fillable = [
        'jenis_distribusi_layanan',
        'lokasi',
        'unit',
        'jumlah'
    ];
}
