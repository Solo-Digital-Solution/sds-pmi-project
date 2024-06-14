<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan_infrastruktur extends Model
{
    use HasFactory;

    protected $table = 'kerusakan_infrastruktur';
    protected $primaryKey = 'id_kerusakan_infrastruktur';
    protected $fillable = [
        'deskripsi_kerusakan',
    ];
}
 