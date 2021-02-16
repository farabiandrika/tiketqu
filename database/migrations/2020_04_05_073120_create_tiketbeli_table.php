<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketbeliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiketbeli', function (Blueprint $table) {
            $table->bigIncrements('id_tiketbeli');
            $table->integer('user_id');
            $table->integer('tiket_id_tiket');
            $table->integer('transaksi_id_transaksi');
            $table->integer('jumlah_beli');
            $table->integer('harga');
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
        Schema::dropIfExists('tiketbeli');
    }
}
