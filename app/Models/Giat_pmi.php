<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giat_pmi extends Model
{
    use HasFactory;

    protected $table = 'giat_pmi';
    protected $primaryKey = 'id_giat_pmi';
    protected $fillable = [];

    public function evakuasiKorban()
    {
        return $this->belongsTo(Evakuasi_korban::class, 'id_evakuasi_korban');
    }

    public function layananKorban()
    {
        return $this->belongsTo(Layanan_korban::class, 'id_distribusi_layanan');
    }
}
