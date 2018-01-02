<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = "kategori";
    protected $primaryKey = "nama_kategori";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'nama_kategori'
    ];
}
