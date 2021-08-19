<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrevilegeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previlege_detail', function (Blueprint $table) {
            $table->bigIncrements('id_previlege_detail');
            $table->integer("id_roles");
            $table->boolean("show")->default(false);
            $table->boolean("input")->default(false);
            $table->boolean("edit")->default(false);
            $table->boolean("delete")->default(false);
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
        Schema::dropIfExists('previlege_detail');
    }
}
