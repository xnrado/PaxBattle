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
        Schema::create('country_item', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('country_id');
            $table->double('quantity');
            $table->timestamps();
            $table->primary(array('item_id', 'country_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_item');
    }
};
