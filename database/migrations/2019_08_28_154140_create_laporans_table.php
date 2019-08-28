<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal');
            $table->string('spp_id')->default("-");
            $table->string('nonSpp_id')->default("-");
            $table->string('pemasukkan_id')->default("-");
            $table->string('pengeluaran_id')->default("-");
            $table->string('sumber');
            $table->string('ket')->default("-");
            $table->string('akun');
            $table->integer('debit')->default(0);
            $table->integer('kredit')->default(0);
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
        Schema::dropIfExists('laporan');
    }
}
