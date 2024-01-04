<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = [
        'idtransaksi',
        'idpesanan',
        'total',
        'bayar',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class, 'idpesanan', 'id');
    }    
}