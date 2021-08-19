<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarifPajakPenghasilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif_pajak_penghasilan', function (Blueprint $table) {
            $table->bigIncrements('id_tarif_pajak_penghasilan');
            $table->integer('penghasilan_min')->nullable();
            $table->integer('penghasilan_max')->nullable();
            $table->integer('pph');
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
        Schema::dropIfExists('tarif_pajak_penghasilan');
    }
}
