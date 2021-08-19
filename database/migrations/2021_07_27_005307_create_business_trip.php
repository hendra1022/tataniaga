<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTrip extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_trip', function (Blueprint $table) {
            $table->bigIncrements('id_business_trip');
            $table->integer('id_status_trip');
            $table->integer('id_client_perusahaan');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('extend_day')->nullable();
            $table->string('PIC_company');
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
        Schema::dropIfExists('business_trip');
    }
}
