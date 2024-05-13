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
        Schema::create('organisationnames', function (Blueprint $table) {
            $table->id('org_name_id');
            $table->unsignedBigInteger('dept_id');
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->unsignedBigInteger('org_type_id');
            $table->foreign('org_type_id')->references('org_type_id')->on('organisationtypes');
            $table->string('org_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisationnames');
    }
};
