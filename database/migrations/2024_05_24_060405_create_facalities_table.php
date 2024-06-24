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
        Schema::create('facalities', function (Blueprint $table) {
            $table->id();
            $table->string('basic_salary');
            $table->string('mobile');
            $table->string('meal');
            $table->string('incentive');
            $table->string('transportation');
            $table->string('ctc');
            $table->string('remarks');
            $table->integer('employee_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facalities');
    }
};
