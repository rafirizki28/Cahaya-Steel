<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    // Table Pelanggan
    public function pembayarans()
    {
        return $this->hasOne(Pembayaran::class,"id","pembayarans_id");
    }
    // Table Barang
    public function barangs()
    {
        return $this->hasOne(Barang::class,"id","barangs_id");
    }

    // Table Barang
    public function users()
    {
        return $this->hasOne(User::class,"id","users_id");
    }
    
}
