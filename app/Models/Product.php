<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function game(){
        return $this->belongsTo(Game::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jasa(){
        return $this->hasMany(Jasa::class);
    }

    public function scopeFilter($query, array $filters){
        $query->when($filters['product'] ?? false, function ($query, $product){
            return $query->where('name',$product);
        });
    }
}
