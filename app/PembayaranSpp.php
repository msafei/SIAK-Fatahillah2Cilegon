<?php

namespace App;
use App\Jurusan;
use App\Siswa;
use Illuminate\Database\Eloquent\Model;

class PembayaranSpp extends Model
{
    protected $table ='pembayaran_spp';
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
