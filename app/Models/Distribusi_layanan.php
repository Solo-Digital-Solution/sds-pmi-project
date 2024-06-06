<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi_layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_distribusi_layanan',
        'lokasi',
        'unit',
        'jumlah'
    ];
}
