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
        Schema::table('players', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });
        Schema::table('countries', function (Blueprint $table) {
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('province_id')->references('id')->on('provinces');
        });
        Schema::table('religions', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces');
        });
        Schema::table('provinces', function (Blueprint $table) {
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('terrain_id')->references('id')->on('terrains');
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('controller_id')->references('id')->on('countries');
            $table->foreign('religion_id')->references('id')->on('religions');
            $table->foreign('level_id')->references('id')->on('province_levels');
        });
        Schema::table('borders', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('province_id_2')->references('id')->on('provinces');
        });
        Schema::table('inventories', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('item_id')->references('id')->on('items');
        });
        Schema::table('country_units', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
        });
        Schema::table('units', function (Blueprint $table) {
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('origin_id')->references('id')->on('provinces');
        });
        Schema::table('unit_costs', function (Blueprint $table) {
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('item_id')->references('id')->on('items');
        });
        Schema::table('unit_maintenances', function (Blueprint $table) {
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('item_id')->references('id')->on('items');
        });
        Schema::table('levy_units', function (Blueprint $table) {
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('movement_orders', function (Blueprint $table) {
            //
        });
        Schema::table('country_buildings', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('buildings', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('building_costs', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('building_productions', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('terrain_modifiers', function (Blueprint $table) {
            $table->foreign('terrain_id')->references('id')->on('terrains');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
