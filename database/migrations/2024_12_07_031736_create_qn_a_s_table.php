<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('q_n_as', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Kolom user_id sebagai foreign key
        $table->string('question');
        $table->text('answer');
        $table->timestamps();

        // Tambahkan relasi ke tabel users
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qn_a_s');
    }
};
