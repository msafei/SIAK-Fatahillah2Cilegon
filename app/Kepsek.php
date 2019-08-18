<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kepsek extends Model
{
    protected $table ='kepsek';
    protected $fillable = [
        'id', 'nama','alamat', 'jk','tanggalLahir','noTlp','email','user_id',
    ];
    public $incrementing = false;
}
