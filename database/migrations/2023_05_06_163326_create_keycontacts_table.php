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
        Schema::create('keycontacts', function (Blueprint $table) {
            $table->id('contact_id');
            $table->string('name');
            $table->string('department');
            $table->string('designation');
            $table->string('contact_no');
            $table->string('email');
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
        Schema::dropIfExists('keycontacts');
    }
};
