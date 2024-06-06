<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas_posko extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'kontak',
    ];
}
