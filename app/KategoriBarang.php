<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    protected $table = "kategori_barang";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id_barang',
        'barang_nama_kategori'
    ];
}
