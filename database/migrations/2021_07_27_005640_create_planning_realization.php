<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanningRealization extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planning_realization', function (Blueprint $table) {
            $table->bigIncrements('id_planning_realization');
            $table->integer('id_business_trip');
            $table->integer('id_pengeluaran_categories');
            $table->integer('id_tipe_pengeluaran');
            $table->string('keterangan')->nullable();
            $table->integer('nominal_planning');
            $table->integer('nominal_realization')->nullable();
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
        Schema::dropIfExists('planning_realization');
    }
}
