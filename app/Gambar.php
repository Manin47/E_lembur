<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    //

    protected $table = "tabel_gambar";
 
    protected $fillable = ['file','keterangan'];
}
