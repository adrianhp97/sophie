<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    public $timestamps = false;

    protected $fillable = [
        'nama_barang',
        'kode_produksi',
        'deskripsi',
        'harga'
    ];
}
