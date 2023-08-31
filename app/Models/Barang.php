<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    public function pemesanans()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}
