<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction_shelter extends Model
{
    use HasFactory;

    protected $table = 'transaction_shelter';
    protected $fillable = [];

    public function dampak()
    {
        return $this->belongsTo(Dampak::class, 'id_dampak');
    }

    public function shelter()
    {
        return $this->belongsTo(Shelter::class, 'id_lokasi_shelter');
    }
}
