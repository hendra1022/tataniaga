<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBalanceSheetDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balance_sheet_detail', function (Blueprint $table) {
            $table->bigIncrements('id_balance_sheet_detail');
            $table->integer('id_balance_sheet');
            $table->string('name');
            $table->integer('jumlah');
            $table->integer('nominal');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('balance_sheet_detail');
    }
}
