<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profile', function (Blueprint $table) {
            $table->bigIncrements('id_perusahaan');
            $table->string('nama_perusahaan');
            $table->date('tanggal_didirikan');
            $table->string('alamat_perusahaan');
            $table->integer('no_telepon');
            $table->string('website_perusahaan');
            $table->string('email_perusahaan');
            $table->float('longitude');
            $table->float('latitude');
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
        Schema::dropIfExists('company_profile');
    }
}
