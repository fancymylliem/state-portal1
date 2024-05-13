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
        Schema::create('mapcategory', function (Blueprint $table) {
            $table->id('content_id');
            $table->unsignedBigInteger('dist_id');
            $table->string('title',500);
            $table->unsignedBigInteger('map_id');
            $table->string('availability_name',500);
            $table->string('map_description',3000);
            $table->string('keywords',500);
            $table->string('language',500);
            $table->string('publish',500);
            $table->string('path',500);
            $table->string('created_by',1000);
           
            $table->foreign('dist_id')->references('dist_id')->on('districts');
            $table->foreign('availability_name')->references('availability_name')->on('availabilities');
            $table->foreign('publish')->references('publish')->on('publish');
            $table->foreign('language')->references('language')->on('languages');
            $table->foreign('map_id')->references('map_id')->on('master_mapcat');
            $table->timestamp('publish_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapcategory');
    }
};
