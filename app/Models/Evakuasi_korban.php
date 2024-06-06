<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evakuasi_korban extends Model
{
    use HasFactory;

    protected $fillable = [
        'luka_ringan_berat',
        'meninggal',
    ];
}
