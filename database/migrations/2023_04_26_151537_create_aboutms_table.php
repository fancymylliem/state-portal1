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
        Schema::create('aboutms', function (Blueprint $table) {
            $table->id('aboutm_id');
            $table->string('area');
            $table->string('population');
            $table->string('capital');
            $table->string('language');
            $table->string('density');
            $table->string('literacy');
            $table->longText('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutms');
    }
};
