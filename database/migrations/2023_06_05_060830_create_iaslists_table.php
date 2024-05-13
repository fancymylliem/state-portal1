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
        Schema::create('iaslists', function (Blueprint $table) {
                $table->id('ias_id');
                $table->string('ias_name');
                $table->string('position');
                $table->string('present_post');
                $table->string('joining');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iaslists');
    }
};
