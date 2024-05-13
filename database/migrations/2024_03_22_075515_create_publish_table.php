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
        Schema::create('publish', function (Blueprint $table) {
            $table->id('publish_id');
            $table->string('publish');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
         Schema::table('spotlight_creators', function($table) {
        $table->dropColumn('publish');
    });
    }
};
