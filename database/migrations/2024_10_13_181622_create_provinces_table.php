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
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id');
            $table->foreignId('terrain_id');
            $table->foreignId('item_id')->nullable()->comment('trade good');
            $table->foreignId('country_id')->nullable();
            $table->foreignId('controller_id')->nullable();
            $table->foreignId('religion_id')->nullable();
            $table->foreignId('level_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->char('color', 6);
            $table->boolean('has_coast');
            $table->double('pops');
            $table->text('svg');
            $table->integer('x_coordinate');
            $table->integer('y_coordinate');
            $table->timestamps();
        });

        Schema::create('regions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->char('color', 6);
            $table->string('image');
            $table->integer('x_coordinate');
            $table->integer('y_coordinate');
            $table->timestamps();
        });

        Schema::create('terrains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->char('color', 6);
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('province_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('pops_limit');
            $table->integer('pops_income');
            $table->integer('building_limit');
            $table->integer('gold_cost');
            $table->integer('wood_cost');
            $table->integer('ores_cost');
            $table->integer('food_cost');
            $table->integer('bricks_cost');
            $table->timestamps();
        });

        Schema::create('borders', function (Blueprint $table) {
            $table->foreignId('province_id');
            $table->foreignId('province_id_2');
            $table->tinyInteger('type');
            $table->timestamps();
            $table->primary(array('province_id', 'province_id_2'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provinces');

        Schema::dropIfExists('regions');

        Schema::dropIfExists('terrains');

        Schema::dropIfExists('province_levels');

        Schema::dropIfExists('borders');
    }
};
