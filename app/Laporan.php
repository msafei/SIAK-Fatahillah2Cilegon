<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table ='laporan';
    protected $fillable = [
        'id','tanggal','sumber','ket','akun','debit','kredit',
    ];
    public $incrementing = false;
}
