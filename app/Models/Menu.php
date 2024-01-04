<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = [
        'idmenu',
        'namamenu',
        'harga',
        // Tambahkan field tambahan jika ada
    ];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'idmenus', 'id');
    }

    // Tambahkan fungsi relasi lainnya jika ada
}
