<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TunggakanSpp extends Model
{
    protected $table ='tunggakan_spp';
    protected $fillable = [
        'id','tanggal','siswa_id','kelas_id','nominalSpp_id','bulan','total','potongan','bayar','kembalian',
    ];
    public $incrementing = false;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    public function nominalSpp()
    {
        return $this->belongsTo(NominalSpp::class);
    }
}
