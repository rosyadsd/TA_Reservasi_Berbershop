<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_paket')->nullable();
            $table->foreignId('id_toko')->default(1);
            $table->foreignId('id_barber')->nullable();
            $table->String('nama_pelanggan');
            $table->String('no_pelanggan');
            $table->String('nama_paket');
            $table->String('keterangan_paket');
            $table->String('nama_barber');
            $table->String('jam_potong');
            $table->String('harga');
            $table->boolean('isApprove')->default(0);
            $table->String('persetujuan')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservasis');
    }
};
