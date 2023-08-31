<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gelen_mesajlars', function (Blueprint $table) {
            $table->string("adi-soyadi");
            $table->string("telefon");
            $table->string("e-posta");
            $table->string("tarih");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gelen_mesajlars');
    }
};
