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
        Schema::table('mapcategory', function (Blueprint $table) {
            //
            $table->dropColumn('publish_on');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mapcategory', function (Blueprint $table) {
            //
            $table->timestamp('publish_on')->useCurrent();
        });
    }
};