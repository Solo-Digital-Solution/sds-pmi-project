<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'name',
        'nik',
        'kecamatan',
        'kelurahan',
        'email',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'goldar',
        'no_telp',
        'username',
        'gender',
        'ktp',
        'profilePhoto',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Definisikan relasi many-to-many ke model Role
    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'users_has_role', 'user_id', 'role_id');
    }

    public function hasAllRoles($roles)
    {
        // Pastikan $roles adalah array
        if (!is_array($roles)) {
            $roles = [$roles];
        }

        // Periksa apakah pengguna memiliki semua peran yang diperlukan
        return $this->roles()->whereIn('role_id', $roles)->count() === count($roles);
    }
}
