<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HaberVeDuyuru extends Model
{
    protected $table = 'haber_ve_duyurus'; // Veritabanı tablosunun adını belirtin
    protected $fillable=["baslik","urlAdres","icerik","arkaGorsel","listGorsel","description","title","keywords"];
    use HasFactory;
}
