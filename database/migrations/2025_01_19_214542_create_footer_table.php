<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footer', function (Blueprint $table) {
            $table->id();
            $table->string('alamat');  // Kolom untuk alamat
            $table->string('nomor_telepon');  // Kolom untuk nomor telepon
            $table->string('instagram_link');  // Kolom untuk link Instagram
            $table->string('gojek_link');  // Kolom untuk link Gojek
            $table->timestamps();  // Menambahkan kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footer');
    }
}
