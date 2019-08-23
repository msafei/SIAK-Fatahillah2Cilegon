<?php

namespace App;
use App\Siswa;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table ='kelas';
    protected $fillable = [
        'id','jurusan_id','nama',
    ];
  
    public $incrementing = false;

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
    public function pembayaranSpp()
    {
        return $this->hasMany(PembayaranSpp::class);
    }
    public function nominalSpp()
    {
        return $this->hasMany(NominalSpp::class);
    }
}
