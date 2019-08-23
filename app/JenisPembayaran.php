<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
    protected $table ='jenis-pembayaran';
    protected $fillable = [
        'id','nama','kode','status'
    ];
  
    public $incrementing = false;

    public function pembayaranSpp()
    {
        return $this->hasMany(PembayaranSpp::class);
    }
}
