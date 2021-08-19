<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmploymentContracts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employment_contracts', function (Blueprint $table) {
            $table->bigIncrements('id_employement_contracts');
            $table->string('status_employee');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->integer('id_user');
            $table->integer('id_position');
            $table->integer('id_status');
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
        Schema::dropIfExists('employment_contracts');
    }
}
