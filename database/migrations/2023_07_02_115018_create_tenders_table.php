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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id('tender_id')->unique();
            $table->string('title');
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->string('ref_no');
            $table->date('release_date')->nullable();
            $table->date('last_date')->nullable();
            $table->date('opening_date')->nullable();
            $table->date('display_date')->nullable();
            $table->string('pdf')->nullable();
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
        Schema::dropIfExists('tenders');
    }
};
