<?php

namespace App;
use App\JenisPembayaran;
use App\PembayaranLain;
use App\TunggakanLain;
use Illuminate\Database\Eloquent\Model;

class NominalLain extends Model
{
    protected $table ='nominal_lain';
    protected $fillable = [
        'id','jenis_pembayaran_id','kelas_id','nominal',
    ];
  
    public $incrementing = false;

    
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function jenisPembayaran()
    {
        return $this->belongsTo(JenisPembayaran::class);
    }
    public function pembayaranLain()
    {
        return $this->hasMany(PembayaranLain::class);
    }
    public function tunggakanLain()
    {
        return $this->hasMany(TunggakanLain::class);
    }
}
