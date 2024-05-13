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
        Schema::create('profile_gov_cm_cj', function (Blueprint $table) {
            $table->id('content_id');
            $table->string('name',500);
            $table->string('designation',500);
            $table->string('assume_office',500);
            $table->string('img_path',500);
            $table->string('dob',500);
            $table->string('birth_place',500);
            $table->string('education',500);
            $table->string('father_name',500);
            $table->string('mother_name',500);
            $table->string('marital_status',500);
            $table->string('children',500);
            $table->string('profession',500);
            $table->string('pol_career',500);
            $table->string('soc_activities',500);
            $table->string('publications',500);
            $table->string('awards',500);
            $table->string('foreign_travels',500);
            $table->string('hobbies',500);
            $table->string('add_info',500);
            $table->string('address',500);
            $table->string('phone_no',500);
            $table->string('fax_no',500);
            $table->string('mobile_no',500);
            $table->string('email_id',500);
            $table->string('website',500);
            $table->string('keyword',500);
            
            $table->unsignedBigInteger('lang_id');
            $table->unsignedBigInteger('publish_id');
            $table->unsignedBigInteger('position_id');

            $table->foreign('publish_id')->references('publish_id')->on('publish');
            $table->foreign('lang_id')->references('lang_id')->on('languages');
            $table->foreign('position_id')->references('position_id')->on('master_position');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profile_gov_cm_cj');
    }
};
