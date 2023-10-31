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
        Schema::create('provides', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('sub-title')->nullable();
            $table->string('provide_title');
            $table->string('provide_sub_title');
            $table->string('provide_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provides');
    }
};
