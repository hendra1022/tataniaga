<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_perusahaan', function (Blueprint $table) {
            $table->bigIncrements('id_client_perusahaan');
            $table->integer('id_perusahaan_referral')->nullable();
            $table->string('company_name');
            $table->string('kota');
            $table->string('alamat');
            $table->string('PIC')->nullable();
            $table->date('presentation_date')->nullable();
            $table->date('follow_up_date')->nullable();
            $table->integer('id_status_client');
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
        Schema::dropIfExists('client_perusahaan');
    }
}
