<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $fillable = [
        'nm_pelanggan', 'noHp_pelanggan', 'almt_pelanggan'
    ];
}
