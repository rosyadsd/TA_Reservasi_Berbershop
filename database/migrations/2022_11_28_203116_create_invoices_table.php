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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hp')->nullable();
            $table->foreignId('id_toko')->default(1);
            $table->String('nama_pembeli');
            $table->String('nohp_pembeli');
            $table->String('merk_hp');
            $table->String('tipe_hp');
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
        Schema::dropIfExists('invoices');
    }
};
