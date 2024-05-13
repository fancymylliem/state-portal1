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
        Schema::create('schemes', function (Blueprint $table) {
            $table->id('scheme_id');
            $table->string('department');
            $table->string('title');
            $table->string('desc');
            $table->string('sbenifici');
            $table->string('sbenifit');
            $table->string('htavail');
            $table->string('sponsors');
            $table->string('agefrom');
            $table->string('to'); 
            $table->string('introduce'); 
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
        Schema::dropIfExists('schemes');
    }
};
