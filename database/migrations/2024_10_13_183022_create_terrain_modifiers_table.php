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
        Schema::create('building_template_terrain', function (Blueprint $table) {
            $table->unsignedBigInteger('terrain_id');
            $table->unsignedBigInteger('building_template_id');
            $table->tinyInteger('throughput_modifier')->default(1);
            $table->tinyInteger('input_modifier')->default(1);
            $table->tinyInteger('output_modifier')->default(1);
            $table->timestamps();
            $table->primary(array('terrain_id', 'building_template_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_template_terrain');
    }
};
