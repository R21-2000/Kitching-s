<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $table = 'pesanan';

    protected $fillable = [
        'idpesanan',
        'idmenus',
        'idpelanggan',
        'jumlah',
        'total',
        'bayar',
        'status',
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'idmenus', 'id');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'idpelanggan', 'id');
    }

    // Tambahkan fungsi relasi lainnya jika ada
}
