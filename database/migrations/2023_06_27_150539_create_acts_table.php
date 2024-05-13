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
        Schema::create('acts', function (Blueprint $table) {
            $table->id('act_id');
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->string('title');
            $table->string('number');
            $table->string('year');
            $table->string('short_title')->nullable();
            $table->string('extent')->nullable();
            $table->string('commencement_date');
            $table->string('act_objective');
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('lang_id')->on('languages');
            $table->string('url')->nullable();
            $table->string('pdf')->nullable();
            $table->string('keywords')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->mediumText('remark')->default('NULL');
            $table->string('filesize')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acts');
    }
};
