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
        Schema::create('loginduses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('sublogindus_id')->constrained('subloginduses')->onDelete('cascade');
            $table->string('image');
            $table->string('alt');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loginduses');
    }
};
