<?php

namespace App\Models\GenelAyar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteAyar extends Model
{
    protected $table = 'site_ayars'; // Veritabanı tablosunun adını belirtin
    protected $fillable=["logo","permalink","aslogan","ahizmet","aourunler","abloklar","areferans","renk1","renk2","default_dil"];
    use HasFactory;
}
