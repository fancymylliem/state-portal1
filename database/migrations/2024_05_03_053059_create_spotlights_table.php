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
        Schema::create('spotlights', function (Blueprint $table) {
            $table->id('content_id');
        $table->unsignedBigInteger('lang_id');
        $table->string('title', 500);
        $table->string('description', 3000);
        $table->string('availability');
        $table->unsignedBigInteger('publish_id');
        $table->string('url_path', 500);
        $table->string('keywords', 500);
        $table->string('pdf');

        $table->foreign('publish_id')->references('publish_id')->on('publish');
        $table->foreign('lang_id')->references('lang_id')->on('languages');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spotlights');
    }
};
