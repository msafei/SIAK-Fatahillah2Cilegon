<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table ='admin';
    protected $fillable = [
        'id', 'nama','alamat', 'jk','tanggalLahir','noTlp','email','user_id',
    ];
}
