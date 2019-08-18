<?php

namespace App;
use App\Jurusan;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table ='kelas';
    protected $fillable = [
        'id','jurusan_id','nama',
    ];
  
    public $incrementing = false;
}
