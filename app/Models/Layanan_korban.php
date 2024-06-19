<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan_korban extends Model
{
    use HasFactory;

    protected $table = 'layanan_korban';
    protected $fillable = [];

    public function giatPMI()
    {
        return $this->belongsTo(Giat_pmi::class, 'id_giat_pmi');
    }

    public function distribusiLayanan()
    {
        return $this->belongsTo(Distribusi_layanan::class, 'id_distribusi_layanan');
    }
}
