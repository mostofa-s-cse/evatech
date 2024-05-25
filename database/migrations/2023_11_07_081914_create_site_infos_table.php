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
        Schema::create('site_infos', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('image');
            $table->longText('provide_top_title');
            $table->longText('provide_title');
            $table->longText('about_top_title');
            $table->longText('about_title');
            $table->longText('project_top_title');
            $table->longText('project_title');
            $table->longText('customer_top_title');
            $table->longText('customer_title');
            $table->longText('hire');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_infos');
    }
};
