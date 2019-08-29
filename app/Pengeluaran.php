<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table ='pengeluaran';
    protected $fillable = [
        'id','tanggal','admin_id','kepsek_id','keterangan','nominalPengeluaran','status',
    ];
    public $incrementing = false;
}
