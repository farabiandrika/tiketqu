<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembeli', function (Blueprint $table) {
            $table->bigIncrements('id_pembeli');
            $table->string('nama_pembeli')->nullable();
            $table->string('email_pembeli')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('transaksi_id_transaksi')->nullable();
            $table->integer('tiketbeli_id_tiketbeli')->nullable();
            $table->integer('tiket_id_tiket')->nullable();
            $table->string('qrcode')->nullable();
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
        Schema::dropIfExists('pembeli');
    }
}
