<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendances extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->bigIncrements('id_attendances');
            $table->integer('id_user');
            $table->date('absent_date');
            $table->string('time_in');
            $table->string('photo_in');
            $table->string('time_out');
            $table->string('photo_out');
            $table->enum('lokasi',['Kantor', 'Perjalanan Dinas']);
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
        Schema::dropIfExists('attendances');
    }
}
