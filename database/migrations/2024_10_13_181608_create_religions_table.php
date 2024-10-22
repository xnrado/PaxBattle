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
        Schema::create('religions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('head')->nullable();
            $table->unsignedBigInteger('province_id')->comment('religion capital')->nullable();
            $table->char('color', 6);
            $table->text('bio_url');
            $table->text('image');
            $table->text('credo')->nullable();
            $table->text('credo_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('religions');
    }
};
