<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    use HasFactory;
    protected $table = 'galeri';
    // Tentukan kolom yang bisa diisi secara massal
    protected $fillable = ['title', 'image', 'timespan'];

    /**
     * Format default dari timespan.
     *
     * @return string
     */
    public function getTimespanAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->diffForHumans();
    }
}
