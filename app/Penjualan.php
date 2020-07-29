<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $fillable = [
        'produk_id', 'jml_produk', 'satuan_id', 'hrg_produk', 'ttl_hrg', 'pelanggan_id', 'kurir_id'
    ];

    public function satuan(){
        return $this->belongsTo('App\Satuan');
    }

    public function kurir(){
        return $this->belongsTo('App\Kurir');
    }

    public function pelanggan(){
        return $this->belongsTo('App\Pelanggan');
    }

    public function produk(){
        return $this->belongsTo('App\Produk');
    }
}
