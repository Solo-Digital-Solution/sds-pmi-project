<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personil extends Model
{
    use HasFactory;

    protected $table = 'personil';
    protected $primaryKey = 'id_personil';
    protected $fillable = [
        'pengurus',
        'staf_markas',
        'relawan_pmi',
        'sukarelawan_spesialis'
    ];
}
