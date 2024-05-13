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
        Schema::create('mcslists', function (Blueprint $table) {
            $table->id('mcs_id');
            $table->string('mcs_name');
            $table->string('position');
            $table->string('present_post');
            $table->string('joining');
            $table->string('assets');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mcslists');
    }
};
