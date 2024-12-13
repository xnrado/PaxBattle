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
        Schema::create('unit_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image');
            $table->unsignedTinyInteger('map_movement');
            $table->unsignedTinyInteger('battle_movement');
            $table->unsignedInteger('max_manpower')->comment('if is_singular, then max_hp');
            $table->unsignedTinyInteger('range')->unsigned();
            $table->json('weapon_skill');
            $table->json('ballistic_skill');
            $table->unsignedTinyInteger('weapon_attacks');
            $table->unsignedTinyInteger('ballistic_attacks');
            $table->json('weapon_strength');
            $table->json('ballistic_strength');
            $table->json('toughness');
            $table->string('type');
            $table->unsignedTinyInteger('vision_range');
            $table->boolean('is_singular');
            $table->timestamps();
        });

        Schema::create('country_unit_template', function (Blueprint $table) {
            $table->foreignId('country_id');
            $table->foreignId('unit_template_id');
            $table->timestamps();
            $table->primary(array('country_id', 'unit_template_id'));
        });

        Schema::create('armies', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order')->unsigned();
            $table->foreignId('country_id')->comment('army controller');
            $table->foreignId('province_id')->comment('army province position');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order')->unsigned();
            $table->foreignId('unit_template_id');
            $table->foreignId('origin_id')->comment('unit province origin');
            $table->foreignId('army_id');
            $table->string('name');
            $table->unsignedInteger('left_movement');
            $table->boolean('is_visible');
            $table->unsignedInteger('manpower')->comment('if is_singular, then hp');
            $table->boolean('is_conscripted');
            $table->timestamps();
        });

        Schema::create('item_unit_template', function (Blueprint $table) {
            $table->foreignId('item_id');
            $table->foreignId('unit_template_id');
            $table->double('recruitment_cost');
            $table->double('maintenance_cost');
            $table->timestamps();
            $table->primary(array('item_id', 'unit_template_id'));
        });

        Schema::create('building_template_unit_template', function (Blueprint $table) {
            $table->foreignId('building_template_id');
            $table->foreignId('unit_template_id');
            $table->double('conscript_quantity');
            $table->timestamps();
            $table->primary(array('building_template_id', 'unit_template_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_templates');

        Schema::dropIfExists('country_unit_template');

        Schema::dropIfExists('units');

        Schema::dropIfExists('item_unit');

        Schema::dropIfExists('building_template_unit_template');
    }


};
