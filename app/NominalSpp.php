<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NominalSpp extends Model
{
    protected $table ='nominal_spp';
    protected $fillable = [
        'id','jenis_pembayaran_id','kelas_id','nominal',
    ];
  
    public $incrementing = false;
    
    public function pembayaranSpp()
    {
        return $this->hasMany(PembayaranSpp::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function jenisPembayaran()
    {
        return $this->belongsTo(JenisPembayaran::class);
    }
}
