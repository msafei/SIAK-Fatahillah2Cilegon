<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    protected $fillable = [
        'id', 'nama','jk', 'tanggalLahir','kelas_id','alamatSiswa','namaIbu','namaAyah','alamatOrtu','noTlpOrtu',
    ];
  
    public $incrementing = false;
}
