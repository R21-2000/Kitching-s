<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';

    protected $fillable = [
        'idpelanggan',
        'nama',
        'nomorhp',
        'alamat',
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'idpelanggan', 'id');
    }

    // Tambahkan fungsi relasi lainnya jika ada
}
