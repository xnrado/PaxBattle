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
        // This table is used to store the state of the armies taking part in a given battle.
        // It has to be stored this way so it may be used later for statistics and showing old battles.
        // It can't be a relation to the 'units' and 'armies' tables, as they get changed often.
        // Also, 'unit_templates' isn't stored here because they aren't deleted only taken away from
        // countries in 'country_unit_template' if they lose them for some reason.

        Schema::create('battle_armies', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->bigInteger('order')->unsigned();
            $table->foreignId('country_id')->comment('army controller');
            $table->foreignId('battle_id')->comment('battle in which army takes part');
            $table->string('name');
            $table->boolean('is_active');
            $table->timestamps();
            $table->primary(['id', 'battle_id']);
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('battle_id')->references('id')->on('battles');
        });

        Schema::create('battle_units', function (Blueprint $table) {
            $table->bigInteger('id')->unsigned();
            $table->bigInteger('order')->unsigned();
            $table->foreignId('unit_template_id');
            $table->foreignId('origin_id')->comment('unit province origin');
            $table->foreignId('battle_id')->comment('battle in which unit takes part');
            $table->foreignId('battle_army_id');
            $table->string('name');
            $table->unsignedInteger('left_movement');
            $table->boolean('is_visible');
            $table->unsignedInteger('manpower')->comment('if is_singular, then hp');
            $table->boolean('is_conscripted');
            $table->boolean('is_active');
            $table->timestamps();
            $table->primary(['id', 'battle_id']);
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('origin_id')->references('id')->on('provinces');
            $table->foreign('battle_id')->references('id')->on('battles');
            $table->foreign('battle_army_id')->references('id')->on('battle_armies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('battle_units');
    }
};
