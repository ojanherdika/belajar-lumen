<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataKurban extends Model
{
    protected $table = 'datakurban';
    protected $fillable = ['nama_pemilik', 'jenis_hewan','jumlah','keterangan'];
}