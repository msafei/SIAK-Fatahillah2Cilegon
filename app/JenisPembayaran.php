<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
    protected $table ='jenis_pembayaran';
    protected $fillable = [
        'id','nama',
    ];
  
    public $incrementing = false;

    public function nominalLain()
    {
        return $this->hasMany(NominalLain::class);
    }
}
