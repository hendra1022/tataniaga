<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('f_name');
            $table->string('l_name');
            $table->string('nik')->unique();
            $table->string('nip')->unique();
            $table->string('kota');
            $table->string('address');
            $table->enum('agama', ['Islam', 'Kristen Protestan', 'Kristen Katholik', 'Buddha', 'Hindu', 'Kong Hu Cu']);
            $table->date('birthDate');
            $table->string('phoneNumber')->unique()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender', ['male', 'female']);
            $table->string('fotoProfil')->nullable();
            $table->string('fotoKTP')->nullable();
            $table->string('nomorRekening')->nullable();
            $table->enum('status', ['Active', 'Inactive', 'Blacklist']);
            $table->text('blacklistReason')->nullable();
            $table->date('blockDate')->nullable();
            $table->integer('id_leader')->nullable();
            $table->integer('id_role');
            $table->integer('id_marital_status');
            $table->integer('id_tarif_pajak_penghasilan');
            $table->integer('id_employee_groups');
            $table->integer('id_position');
            $table->integer('id_perusahaan');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
