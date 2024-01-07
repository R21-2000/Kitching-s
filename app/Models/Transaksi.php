<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksi';

    protected $fillable = [
        'id_pelanggan',
        'total',
        'bayar',
        'updated_at',
        'created_at',
        'id_menu',
    ];

    protected $hidden = [];
}