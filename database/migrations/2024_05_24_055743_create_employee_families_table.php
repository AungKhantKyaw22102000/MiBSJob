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
        Schema::create('employee_families', function (Blueprint $table) {
            $table->id();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->integer('father_age')->nullable();
            $table->integer('mother_age')->nullable();
            $table->integer('spouse_age')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('spouse_occupation')->nullable();
            $table->string('father_depen')->nullable();
            $table->string('mother_depen')->nullable();
            $table->string('spouse_depen')->nullable();
            $table->string('employee_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_families');
    }
};
