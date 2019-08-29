<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Siswa;
use App\Kelas;
use App\NominalLain;
class TunggakanLain extends Model
{
    protected $table ='tunggakan_lain';
    protected $fillable = [
        'id','siswa_id','kelas_id','nominalLain_id','nominal','bayar','potongan',
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
