<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table ='jurusan';
    protected $fillable = [
        'id','kode','nama',
    ];
    public $incrementing = false;
}
