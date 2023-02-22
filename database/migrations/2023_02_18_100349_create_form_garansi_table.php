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
        Schema::create('form_garansi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_wa');
            $table->string('jenis_kelamin');
            $table->string('provinsi');
            $table->string('kota');
            $table->text('alamat');
            $table->string('kodeunik');
            $table->string('total_pembayaran');
            $table->string('status_pemesanan');
            $table->string('bukti_pembayaran');
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
        Schema::dropIfExists('form_garansi');
    }
};
