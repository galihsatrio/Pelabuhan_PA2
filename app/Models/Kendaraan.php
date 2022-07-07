<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable = [
        'tanggal', 'waktu','nama', 'jenis', 'no_polisi', 'pesanan_id'
    ];
}
