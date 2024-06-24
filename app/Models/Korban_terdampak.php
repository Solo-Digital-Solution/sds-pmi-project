<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korban_terdampak extends Model
{
    use HasFactory;

    protected $table = 'korban_terdampak';
    protected $primaryKey = 'id_korban_terdampak';
    protected $fillable = [
        'jmlh_kk',
        'jmlh_jiwa',
    ];
}
