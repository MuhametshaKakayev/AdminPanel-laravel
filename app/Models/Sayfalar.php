<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayfalar extends Model
{
    protected $table = 'sayfalars'; // Veritabanı tablosunun adını belirtin
    protected $fillable=["baslik","urlAdres","icerik","arkaGorsel","listGorsel","description","title","keywords"];
    use HasFactory;
}
