<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontrakKerjasama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontrak_kerjasama', function (Blueprint $table) {
            $table->bigIncrements('id_kontrak_kerjasama');
            $table->integer('id_client_perusahaan');
            $table->string('PIC_SFA');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('file_detail_kontrak');
            $table->string('file_detail_biaya');
            $table->integer('id_status_kerjasama');
            $table->integer('extend');
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
        Schema::dropIfExists('kontrak_kerjasama');
    }
}
