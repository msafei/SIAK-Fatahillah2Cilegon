<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembayaranLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembayaran_lain', function (Blueprint $table) {
            $table->string('id');
            $table->date('tanggal');
            $table->string('siswa_id');
            $table->string('kelas_id');
            $table->string('nominalLain_id');
            $table->integer('bayar');
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
        Schema::dropIfExists('pembayaran_lain');
    }
}
