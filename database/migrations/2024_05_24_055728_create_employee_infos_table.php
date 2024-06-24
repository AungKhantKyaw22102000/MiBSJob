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
        Schema::create('employee_infos', function (Blueprint $table) {
            $table->id();
            $table->string('employee_id');
            $table->longText('current_address');
            $table->string('employee_photo');
            $table->string('ssb')->nullable();
            $table->string('nrc');
            $table->date('date_of_birth')->nullable();
            $table->string("religion", 25)->nullable();
            $table->string('employee_process', 100);
            $table->string('nationality', 50)->nullable();
            $table->string('emergency_contact', 20)->nullable();
            $table->string('email')->nullable();
            $table->string('place_of_birth', 40)->nullable();
            $table->string('gender', 30)->nullable();
            $table->string('marital_status', 20)->nullable();
            $table->string('blood_group', 5)->nullable();
            $table->string('no_of_children', 10)->nullable();
            $table->string('hr_policies');
            $table->string('job_rotation', 10)->nullable();
            $table->integer('applyer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_infos');
    }
};
