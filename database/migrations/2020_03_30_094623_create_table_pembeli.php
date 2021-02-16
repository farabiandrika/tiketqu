<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePembeli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_pembeli', function (Blueprint $table) {
            $table->bigIncrements('id_pembeli');
            $table->string('nama_pembeli');
            $table->string('email_pembeli');
            $table->string('barcode_pembeli')->nullable();
            $table->integer('transaksi_id_transaksi');
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
        Schema::dropIfExists('table_pembeli');
    }
}
