<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shelter extends Model
{
    use HasFactory;

    protected $table = 'shelter';
    protected $primaryKey = 'id_lokasi_shelter';
    protected $fillable = [
        'lokasi_shelter',
        'jumlah_kk',
        'jumlah_jiwa',
        'jumlah_laki',
        'jumlah_perempuan',
        'dibawah_lima',
        'antara_lima_dan_delapanbelas',
        'lebih_delapanbelas',
        'jumlah'
    ];
}
 