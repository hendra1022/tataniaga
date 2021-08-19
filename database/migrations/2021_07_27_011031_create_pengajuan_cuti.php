<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanCuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_cuti', function (Blueprint $table) {
            $table->bigIncrements('id_pengajuan_cuti');
            $table->integer('id_user');
            $table->integer('id_kategori_cuti');
            $table->integer('id_status_pengajuan_cuti');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('deskripsi')->nullable();
            $table->string('foto_surat')->nullable();
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
        Schema::dropIfExists('pengajuan_cuti');
    }
}
