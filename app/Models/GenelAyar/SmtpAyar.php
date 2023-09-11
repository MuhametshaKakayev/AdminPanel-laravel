<?php

namespace App\Models\GenelAyar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmtpAyar extends Model
{
    protected $table = 'smtp_ayars'; // Veritabanı tablosunun adını belirtin
    protected $fillable=["smtp_host","smtp_port","smpt_protokol","smpt_usermail","smtp_password"];
    use HasFactory;
}
