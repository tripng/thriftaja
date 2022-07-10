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

    public function scopeFilter($query,array $filters){
        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where('nama_barang','like','%'.$search.'%')
                        ->orWhere('keterangan','like','%'.$search.'%');
        });

        $query->when($filters['price'] ?? false, function($query,$price){
            return $query->where('harga','<=',$price);
        });

        $query->when($filters['category'] ?? false, function($query,$category){
            return $query->whereHas('category',function($query) use ($category){
                $query->where('slug',$category);
            });
        });
    }

}