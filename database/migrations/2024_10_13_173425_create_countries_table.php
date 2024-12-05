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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description');
            $table->char('color', 6);
            $table->string('ruler')->nullable();
            $table->string('government')->nullable();
            $table->foreignId('religion_id');
            $table->foreignId('province_id')->comment('capital');
            $table->string('bio_url');
            $table->string('image');
            $table->string('credo')->nullable();
            $table->string('credo_image')->nullable();
            $table->integer('channel')->nullable();
            $table->boolean('is_visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
