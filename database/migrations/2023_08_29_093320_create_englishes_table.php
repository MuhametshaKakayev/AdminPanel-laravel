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
        Schema::create('englishes', function (Blueprint $table) {
            $table->id();
            $table->string("adi");
            $table->string("kisa_adi");
            $table->string("gosterim_adi");
            $table->string("sira");
            $table->string("resim");
            $table->string("degiskenler");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('englishes');
    }
};
