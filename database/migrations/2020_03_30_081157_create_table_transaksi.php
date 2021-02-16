<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_transaksi', function (Blueprint $table) {
            $table->integer('id_transaksi')->unique();
            $table->integer('event_id_event');
            $table->integer('user_id');
            $table->integer('jumlah_tiket')->nullable();
            $table->string('metode_pembayaran')->nullable();
            $table->string('nover')->nullable();
            $table->integer('total')->nullable();
            $table->enum('status_transaksi', array('0','1','2'))->default('0');
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
        Schema::dropIfExists('table_transaksi');
    }
}
