<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korban_jiwa extends Model
{
    use HasFactory;

    protected $fillable = [
        'luka_berat',
        'luka_ringan',
        'meninggal',
        'hilang',
        'mengungsi'
    ];
}
