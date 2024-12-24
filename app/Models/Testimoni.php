<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimoni extends Model
{
   use HasFactory;

   protected $table = 'testimoni';
   public $timestamps = false;

   protected $fillable= [
        'nama',
        'isi_testimoni',
        'gambar',
   ];
}
