<?php

namespace App\Models\GenelAyar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteBilgi extends Model
{
    protected $table = 'site_bilgis'; // Veritabanı tablosunun adını belirtin
    protected $fillable = ["title", "keywords", "descriptions", "facebook", "twitter", "instagram", "googlePlus", " google_maps", " slogan1 ", "slogan2", "telefon", "faks", "re", "adres", "analytics"];
    use HasFactory;
}
