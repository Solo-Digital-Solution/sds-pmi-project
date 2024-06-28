<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_name'
    ];

    // Definisikan relasi many-to-many ke model User
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_has_role', 'role_id', 'user_id');
    }
}
