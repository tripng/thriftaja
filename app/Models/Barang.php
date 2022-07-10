<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Testimoni;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // public function testimoni(){
        // return $this->hasMany(Testimoni::class);
    // }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function cart(){
        return $this->hasOne(Cart::class);
    }
    public function rincian_barang(){
        return $this->hasOne(RincianBarang::class);
    }
    public function user(){
        return $this->belongsToMany(User::class);
    }
    public function testimoni(){
        return $this->hasMany(Testimoni::class);
    }

}