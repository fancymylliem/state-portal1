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
        //
        Schema::table('govorders', function (Blueprint $table) {
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('departments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('govorders', function (Blueprint $table) {
            $table->dropColumn('department');
        });
    }
};
