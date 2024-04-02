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
        Schema::create('position_requirement', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
            $table->foreignId('requirement_id')->constrained('requirements')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('position_requirement');
    }
};