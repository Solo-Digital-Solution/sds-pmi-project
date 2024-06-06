<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korban_terdampak extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumlah_kk',
        'jumlah_jiwa',
    ];
}
