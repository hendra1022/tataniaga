<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventarisPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris_perusahaan', function (Blueprint $table) {
            $table->bigIncrements('id_inventaris_perusahaan');
            $table->integer('id_perusahaan');
            $table->string('id_inventaris_code');
            $table->string('nama_inventaris');
            $table->integer('jumlah_inventaris');
            $table->integer('id_kategori_inventaris');
            $table->integer('id_sub_kategori_inventaris');
            $table->integer('tarif');
            $table->date('tanggal_perolehan');
            $table->integer('harga_perolehan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris_perusahaan');
    }
}
