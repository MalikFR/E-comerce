<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Costum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('costum', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('pengiriman');
            $table->integer('jumlah_brg');
            $table->string('pembayaran');
            $table->string('cek_pembayaran');
            $table->boolean('status');
            $table->unsignedInteger('id_produks');
            $table->foreign('id_produks')->references('id')->on('produks')->ondelete('cascade');
            $table->unsignedInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users')->ondelete('cascade');

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
        Schema::dropIfExists('costum');
    }
}
