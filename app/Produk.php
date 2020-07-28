<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'produk', 'satuan_id', 'hrg_produk', 'spsf_produk'
    ];

    public function satuan(){
        return $this->belongsTo('App\Satuan');
    }
}
