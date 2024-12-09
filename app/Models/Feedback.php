<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
   use HasFactory;
     protected $fillable = [
        'nama',
        'email',
        'pesan', // Tambahkan kolom 'pesan'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
