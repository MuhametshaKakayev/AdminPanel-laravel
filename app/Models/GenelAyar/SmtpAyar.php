<?php

namespace App\Models\GenelAyar;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SmtpAyar extends Model
{
    protected $table = 'smtp_ayars'; // Veritabanı tablosunun adı

    protected $fillable = [
        'host',
        'port',
        'protokol',
        'usermail',
        'password',
    ];
    use HasFactory;
    // İlişkilendirilecek başka özellikler veya yöntemler ekleyebilirsiniz
}
