<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTunggakanSppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tunggakan_spp', function (Blueprint $table) {
            $table->string('id');
            $table->date('tanggal');
            $table->string('siswa_id')->references('id')->on('siswa')->onDelete('cascade');
            $table->string('kelas_id')->references('id')->on('kelas')->onDelete('cascade');
            $table->string('nominalSpp_id')->references('id')->on('nominal_spp')->onDelete('cascade');
            $table->string('bulan');
            $table->integer('total');
            $table->integer('potongan');
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tunggakan_spp');
    }
}
