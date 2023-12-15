<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    //Relasi tabel kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    //Relasi tabel Checkout
    public function checkout()
    {
        return $this->hasMany(Checkout::class);
    }
}
