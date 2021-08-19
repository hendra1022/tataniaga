<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuktiPerjalananDinas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bukti_perjalanan_dinas', function (Blueprint $table) {
            $table->bigIncrements('id_bukti_perjalanan_dinas');
            $table->integer('id_planning_realization');
            $table->string('foto_bukti');
            $table->string('keterangan');
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
        Schema::dropIfExists('bukti_perjalanan_dinas');
    }
}
