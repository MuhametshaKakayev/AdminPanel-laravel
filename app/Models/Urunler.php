<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urunler extends Model
{
    protected $table = 'urunlers'; // Veritabanı tablosunun adı

    protected $fillable = [
        'urlAdres',
        'baslik',
        'oneCikan',
        'urunKategori',
        'listGorsel',
        'arkaGorsel',
        'icerik',
        'title',
        'keywords',
        'description',
    ];
    use HasFactory;
}
