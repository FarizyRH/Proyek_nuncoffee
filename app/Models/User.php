<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',  // Pastikan ada field 'role' untuk menyimpan tipe pengguna
    ];

    /**
     * Cek jika user adalah admin
     */
    public function isAdmin()
    {
        return $this->role === 'admin';  // Sesuaikan dengan cara Anda menyimpan role di database
    }

    /**
     * Cek jika user bukan admin
     */
    public function isNotAdmin()
    {
        return $this->role !== 'admin';  // Memeriksa jika user bukan admin
    }
}
