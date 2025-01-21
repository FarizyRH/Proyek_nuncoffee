<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageToFooterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('footer', function (Blueprint $table) {
            $table->string('image')->nullable()->after('gojek_link'); // Menambahkan kolom 'image'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('footer', function (Blueprint $table) {
            $table->dropColumn('image'); // Menghapus kolom 'image' jika rollback
        });
    }
}
