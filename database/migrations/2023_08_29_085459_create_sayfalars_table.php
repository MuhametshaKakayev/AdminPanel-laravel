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
        Schema::create('sayfalars', function (Blueprint $table) {
            $table->id();
            $table->string("baslik");
            $table->string("urlAdres");
            $table->string("listGorsel");
            $table->string("arkaGorsel");
            $table->string("icerik");
            $table->string("title");
            $table->string("keywords");
            $table->string("description");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sayfalars');
    }
};
