<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyelenggaraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penyelenggara', function (Blueprint $table) {
            $table->bigIncrements('id_penyelenggara');
            $table->string('nama_penyelenggara');
            $table->string('no_telp_penyelenggara');
            $table->string('logo_penyelenggara')->nullable();
            $table->string('no_rek_penyelenggara');
            $table->string('nama_bank_penyelenggara');
            $table->integer('user_id');
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
        Schema::dropIfExists('penyelenggara');
    }
}
