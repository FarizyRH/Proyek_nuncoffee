<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonisTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama'); // Kolom nama
            $table->text('pesan'); // Kolom pesan
            $table->string('gambar')->nullable(); // Kolom gambar (nullable untuk opsional)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonis'); // Drop tabel jika rollback
    }
}
