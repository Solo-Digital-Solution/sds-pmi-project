<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';
    protected $fillable = [
        'giat_pemerintah',
        'kebutuhan',
        'hambatan',
        'nama_laporan',
        'update'
    ];

    protected $casts = [
        'id_laporan' => 'string',
    ];

    public function kejadian()
    {
        return $this->belongsTo(Kejadian::class, 'id_kejadian');
    }

    public function dampak()
    {
        return $this->belongsTo(Dampak::class, 'id_dampak');
    }

    public function mobilisasi()
    {
        return $this->belongsTo(Mobilisasi::class, 'id_mobilisasi');
    }

    public function giatPMI()
    {
        return $this->belongsTo(Giat_pmi::class, 'id_giat_pmi');
    }

    public function personilDihubungi()
    {
        return $this->belongsTo(Personil_dihubungi::class, 'id_personil_dihubungi');
    }

    public function petugasPosko()
    {
        return $this->belongsTo(Petugas_posko::class, 'id_petugas_posko');
    }

    public function dokumentasis()
    {
        return $this->belongsToMany(Dokumentasi::class, 'transaction_dokumentasi', 'id_laporan', 'id_dokumentasi');
    }
}
