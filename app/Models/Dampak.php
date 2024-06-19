<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dampak extends Model
{
    use HasFactory;

    protected $table = 'dampak';
    protected $primaryKey = 'id_dampak';
    protected $fillable = [
        // Kolom-kolom lainnya jika ada
    ];

    public function korbanTerdampak()
    {
        return $this->belongsTo(Korban_terdampak::class, 'id_korban_terdampak');
    }

    public function korbanJiwa()
    {
        return $this->belongsTo(Korban_jiwa::class, 'id_korban_jiwa');
    }

    public function kerusakanRumah()
    {
        return $this->belongsTo(Kerusakan_rumah::class, 'id_kerusakan_rumah');
    }

    public function kerusakanFasilitas()
    {
        return $this->belongsTo(Kerusakan_fasilitas::class, 'id_kerusakan_fasilitas');
    }

    public function kerusakanInfrastruktur()
    {
        return $this->belongsTo(Kerusakan_infrastruktur::class, 'id_kerusakan_infrastruktur');
    }

    public function shelter()
    {
        return $this->belongsTo(Shelter::class, 'id_lokasi_shelter');
    }
}
