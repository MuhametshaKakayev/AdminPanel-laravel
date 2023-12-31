<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'Blogs'; // Veritabanı tablosunun adını belirtin
    protected $fillable=["baslik","urlAdres","içerik","arkaGorsel","listGorsel","description","title","keywords"];
    use HasFactory;
}
