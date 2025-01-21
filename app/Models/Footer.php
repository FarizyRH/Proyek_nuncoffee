<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak menggunakan nama default (yang sudah otomatis plural)
    protected $table = 'footer';

    protected $fillable = [
        'alamat',
        'nomor_telepon',
        'instagram_link',
        'gojek_link',
        'image',
    ];

}
