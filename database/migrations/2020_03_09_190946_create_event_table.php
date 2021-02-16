<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id_event');
            $table->string('nama_event');
            $table->text('deskripsi_event');
            $table->timestamp('waktu_mulai_event')->nullable();
            $table->timestamp('waktu_berakhir_event')->nullable();
            $table->string('lokasi_event');
            $table->double('lokasi_latitude')->nullable();
            $table->double('lokasi_longitude')->nullable();
            $table->string('kategori_event');
            $table->string('banner_event')->default('banner.jpg');
            $table->enum('jenis_promosi', array('0','1',));
            $table->integer('penyelenggara_id_penyelenggara');
            $table->integer('user_id');
            $table->enum('status_event', array('0','1'))->default('0');
            $table->expirable('ends_at')->nullable();
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
        Schema::dropIfExists('event');
    }
}
