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
        Schema::create('job_applies', function (Blueprint $table) {
            $table->id();
            $table->string('apply_id')->unique();
            $table->string('name');
            $table->string('phone',15);
            $table->string('desired_position')->nullable();
            $table->string('nrc');
            $table->string('education_purpose')->nullable();
            $table->string('shift')->nullable();
            $table->string('cv')->nullable();
            $table->string('education_lv')->nullable();
            $table->string('work_experience')->nullable();
            $table->string('english_skill')->nullable();
            $table->string('computer_skill')->nullable();
            $table->string('burmese_speed')->nullable();
            $table->string('english_speed')->nullable();
            $table->string('current_salary')->nullable();
            $table->string('current_salary_upload')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('nearest_bus_station')->nullable();
            $table->string('noticed_time')->nullable();
            $table->string('confirm')->nullable();
            $table->integer('hr_id')->nullable();
            $table->integer('tl_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applies');
    }
};
