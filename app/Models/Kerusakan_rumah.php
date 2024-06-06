<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan_rumah extends Model
{
    use HasFactory;

    protected $fillable = [
        'rusak_berat',
        'rusak_sedang',
        'rusak_ringan'
    ];
}
