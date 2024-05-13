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
        Schema::create('forms', function (Blueprint $table) {
            $table->id('form_id');
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->unsignedBigInteger('org_name_id');
            $table->foreign('org_name_id')->references('org_name_id')->on('organisationnames');
            $table->unsignedBigInteger('dist_id');
            $table->foreign('dist_id')->references('dist_id')->on('districts');
            $table->string('title');
            $table->string('form_number');
            $table->string('classification')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('category_id')->on('categories');
            $table->mediumText('description')->nullable();
            $table->string('associate_service')->nullable();
            $table->unsignedBigInteger('lang_id');
            $table->foreign('lang_id')->references('lang_id')->on('languages');
            $table->string('url')->nullable();
            $table->string('pdf')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->mediumText('remark')->default('NULL');
            $table->string('keywords');
            $table->string('filesize')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
