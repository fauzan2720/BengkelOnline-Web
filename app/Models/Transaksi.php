<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi'; 
    protected $fillable = [
        'transaction_id',
        'nopol',
        'phone',
        'norangka',
        'nomesin',
        'trakit',
        'type',
        'km',
        'warna',
        'nproduk',
        'notes',
    ];
    
}
