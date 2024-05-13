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
        Schema::create('councilofministers', function (Blueprint $table) {
            $table->id('minister_id');
            $table->string('minister_name');
            $table->string('designation');
            $table->string('party');
            $table->string('constituency');
            $table->string('district');
            $table->string('assembly');
            $table->string('nativeplace');
            $table->string('education');
            $table->string('occupation');
            $table->string('political');
            $table->string('marital');
            $table->string('additional');
            $table->string('communication');
            $table->string('permanent');
            $table->string('email');
            $table->string('contact_number');
            $table->string('photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('councilofministers');
    }
};
