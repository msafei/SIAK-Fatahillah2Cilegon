<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranSppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_spp', function (Blueprint $table) {
            $table->string('id');
            $table->date('tanggal');
            $table->string('siswa_id');
            $table->string('kelas_id');
            $table->string('nominalSpp_id');
            $table->string('bulan');
            $table->integer('total');
            $table->integer('potongan');
            $table->integer('bayar');
            $table->integer('kembalian');
            $table->timestamps();
            $table->primary('id');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->foreign('nominalSpp_id')->references('id')->on('nominal_spp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayaran_spp');
    }
}
