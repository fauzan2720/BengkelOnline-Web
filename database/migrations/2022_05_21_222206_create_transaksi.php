<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('no_antrian');
            $table->string('nopol')->unique();
            $table->string('fullname');
            $table->string('phone');
            $table->string('norangka');
            $table->string('nomesin');
            $table->string('trakit');
            $table->string('type');
            $table->string('km');
            $table->string('warna');
            $table->string('nproduk');
            $table->string('notes')->nullable();
            $table->bigInteger('price');
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
        Schema::dropIfExists('transaksi');
    }
}
