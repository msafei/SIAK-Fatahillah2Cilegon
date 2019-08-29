<?php

namespace App;
use App\Siswa;
use App\Kelas;
use App\NominalLain;
use Illuminate\Database\Eloquent\Model;

class PembayaranLain extends Model
{
    protected $table ='pembayaran_lain';
    protected $fillable = [
        'id','tanggal','siswa_id','kelas_id','nominalLain_id','nominal','bayar','potongan',
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
    public function nominalLain()
    {
        return $this->belongsTo(NominalLain::class);
    }
}
