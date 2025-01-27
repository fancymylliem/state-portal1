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
        Schema::create('contentcreators', function (Blueprint $table) {
            $table->id('cc_id');
            $table->string('full_name');
            $table->string('email');
            $table->string('password');
            $table->tinyInteger('status')->default('0');              
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contentcreators');
    }
};
