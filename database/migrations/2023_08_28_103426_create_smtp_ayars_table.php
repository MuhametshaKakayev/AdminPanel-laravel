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
        Schema::create('smtp_ayars', function (Blueprint $table) {
            $table->id();
            $table->string("smtp_host");
            $table->string("smtp_port");
            $table->string("smpt_protokol");
            $table->string("smpt_usermail");
            $table->string("smtp_password");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('smtp_ayars');
    }
};
