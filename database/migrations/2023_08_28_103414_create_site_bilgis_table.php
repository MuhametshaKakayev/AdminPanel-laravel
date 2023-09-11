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
        Schema::create('site_bilgis', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->string("keywords");
            $table->string("descriptions");
            $table->string("facebook");
            $table->string("twitter");
            $table->string("instagram");
            $table->string("google+");
            $table->string("google_maps");
            $table->string("slogan1");
            $table->string("slogan2");
            $table->string("telefon");
            $table->string("faks");
            $table->string("email");
            $table->string("adres");
            $table->string("analytics");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_bilgis');
    }
};
