<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korban_jiwa extends Model
{
    use HasFactory;

    protected $table = 'korban_jiwa';
    protected $primaryKey = 'id_korban_jiwa';
    protected $fillable = [
        'luka_berat',
        'luka_ringan',
        'meninggal',
        'hilang',
        'mengungsi'
    ];
}
