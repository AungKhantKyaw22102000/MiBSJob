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
        Schema::create('remarks', function (Blueprint $table) {
            $table->id();
            $table->longText('hr_remark');
            $table->longText('tl_remark');
            $table->string('hr_decision');
            $table->string('tl_decision');
            $table->integer('hr_id');
            $table->integer('tl_id');
            $table->integer('applyer_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('remarks');
    }
};
