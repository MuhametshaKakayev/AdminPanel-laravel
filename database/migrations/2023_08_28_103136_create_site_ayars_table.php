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
        Schema::create('site_ayars', function (Blueprint $table) {
            $table->id();
            $table->boolean("permalink");
            $table->boolean("aslogan");
            $table->boolean("ahizmet");
            $table->boolean("aourunler");
            $table->boolean("abloklar");
            $table->boolean("areferans");
            $table->string("renk1");
            $table->string("renk2");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_ayars');
    }
};
