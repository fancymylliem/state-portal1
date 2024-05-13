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
        Schema::create('govorders', function (Blueprint $table) {
            $table->id('order_id');
            $table->string('department');
            $table->string('title');
            $table->string('gono');
            $table->string('releasedate');
            $table->string('pdf');
            $table->tinyInteger('status')->default('0');
            $table->mediumText('remark')->default('NULL');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('govorders');
    }
};
