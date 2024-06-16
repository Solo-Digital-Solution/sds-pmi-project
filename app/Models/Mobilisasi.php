<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobilisasi extends Model
{
    use HasFactory;

    protected $table = 'mobilisasi';
    protected $primaryKey = 'id_mobilisasi';
    protected $fillable = [];

    // Tambahkan relasi jika diperlukan
    public function personil()
    {
        return $this->belongsTo(Personil::class, 'id_personil');
    }

    public function tsr()
    {
        return $this->belongsTo(Tsr::class, 'id_tsr');
    }

    public function tdb()
    {
        return $this->belongsTo(Tdb::class, 'id_tdb');
    }
}
