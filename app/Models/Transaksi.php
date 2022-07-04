<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function rincian_barang(){
        return $this->belongsTo(RincianBarang::class);
    }
    public function rincian_pengiriman(){
        return $this->belongsTo(RincianPengiriman::class);
    }
}