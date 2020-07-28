<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baku extends Model
{
    Protected $fillable = [
        'nm_barang', 'jml_barang', 'satuan_id', 'hrg_barang', 'hrg_total', 'toko_id'
    ];

    public function satuan(){
        return $this->belongsTo('App\Satuan');
    }

    public function toko(){
        return $this->belongsTo('App\Toko');
    }

    public function barang(){
        return $this->belongsTo('App\Barang');
    }
}
