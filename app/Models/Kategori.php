<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori'; // Veritabanı tablosunun adı

    protected $fillable = [
        'kBaslik',
        'sira',
        'listGorsel',
        'arkaGorsel',
        'aciklama',
        'title',
        'keywords',
        'description',
    ];
    use HasFactory;
}
