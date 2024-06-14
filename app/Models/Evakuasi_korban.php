<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evakuasi_korban extends Model
{
    use HasFactory;

    protected $table = 'evakuasi_korban';
    protected $primaryKey = 'id_evakuasi_korban';
    protected $fillable = [
        'luka_ringan_berat',
        'meninggal',
    ];

    public function giatPMI()
    {
        return $this->hasOne(Giat_pmi::class, 'id_evakuasi_korban');
    }
}
