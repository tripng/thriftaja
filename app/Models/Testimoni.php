<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimoni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,array $filters){
        $query->when($filters['search'] ?? false, function($query,$search){
            return $query->where('name','like','%'.$search.'%');
        });
    }
}