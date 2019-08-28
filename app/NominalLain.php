<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NominalLain extends Model
{
    protected $table ='nominal_pembayaran';
    protected $fillable = [
        'id','jenis_pembayaran_id','nominal',
    ];
  
    public $incrementing = false;
}
