<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->bigIncrements('id_tiket');
            $table->string('nama_tiket');
            $table->integer('event_id_event');
            $table->integer('stok_tiket');
            $table->string('harga_tiket');
            $table->integer('satuan_tiket');
            $table->timestamp('waktu_mulai_jual')->nullable();
            $table->timestamp('waktu_berakhir_jual')->nullable();
            $table->text('deskripsi_tiket');
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
        Schema::dropIfExists('tiket');
    }
}
