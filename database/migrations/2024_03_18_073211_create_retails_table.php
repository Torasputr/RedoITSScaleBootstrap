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
        Schema::create('retails', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('subretail_id')->constrained('subretails')->onDelete('cascade');
            $table->string('image');
            $table->string('alt');
            $table->string('name');
            $table->string('description');
            $table->string('brochure');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retails');
    }
};
