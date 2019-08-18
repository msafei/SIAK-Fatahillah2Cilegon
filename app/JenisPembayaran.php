<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
    protected $table ='jenis-pembayaran';
    protected $fillable = [
        'id','nama',
    ];
  
    public $incrementing = false;
}
