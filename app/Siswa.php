<?php

namespace App;
use App\Kelas;
use App\Jurusan;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table ='siswa';
    protected $fillable = [
        'id', 'nama','jk', 'tanggalLahir','kelas_id','alamatSiswa','namaIbu','namaAyah','alamatOrtu','noTlpOrtu',
    ];
  
    public $incrementing = false;

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function pembayaranSpp()
    {
        return $this->belongsTo(PembayaranSpp::class);
    }

}
