<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personil_dihubungi extends Model
{
    use HasFactory;

    protected $table = 'personil_dihubungi';
    protected $primaryKey = 'id_personil_dihubungi';
    protected $fillable = [
        'nama_lengkap',
        'posisi',
        'kontak'
    ];
}
