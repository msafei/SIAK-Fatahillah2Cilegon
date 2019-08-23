<?php

namespace App;
use App\Siswa;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table ='jurusan';
    protected $fillable = [
        'id','kode','nama',
    ];
    public $incrementing = false;

    
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }

}
