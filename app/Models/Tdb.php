<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tdb extends Model
{
    use HasFactory;

    protected $table = 'tdb';
    protected $primaryKey = 'id_tdb';
    protected $fillable = [
        'kend_ops',
        'truk_angkatan',
        'truk_tangki',
        'double_chain',
        'alat_du',
        'ambulans',
        'alat_watsan',
        'rs_lapangan',
        'alat_pkdd',
        'gudang_lapangan',
        'posko_aju',
        'alat_it_lapangan'
    ];
}
