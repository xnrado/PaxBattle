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
        Schema::table('users', function (Blueprint $table) {
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
        Schema::table('country_item', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('item_id')->references('id')->on('items');
        });
        Schema::table('country_unit_template', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
        });
        Schema::table('armies', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('province_id')->references('id')->on('provinces');
        });
        Schema::table('units', function (Blueprint $table) {
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('origin_id')->references('id')->on('provinces');
            $table->foreign('army_id')->references('id')->on('armies');
        });
        Schema::table('building_template_unit_template', function (Blueprint $table) {
            $table->foreign('unit_template_id')->references('id')->on('unit_templates');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('movement_orders', function (Blueprint $table) {
            //
        });
        Schema::table('building_template_country', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('buildings', function (Blueprint $table) {
            $table->foreign('province_id')->references('id')->on('provinces');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('building_template_item', function (Blueprint $table) {
            $table->foreign('item_id')->references('id')->on('items');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
        Schema::table('building_template_terrain', function (Blueprint $table) {
            $table->foreign('terrain_id')->references('id')->on('terrains');
            $table->foreign('building_template_id')->references('id')->on('building_templates');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_country_id_foreign');
        });
        Schema::table('countries', function (Blueprint $table) {
            $table->dropForeign('countries_religion_id_foreign');
            $table->dropForeign('countries_province_id_foreign');
        });
        Schema::table('religions', function (Blueprint $table) {
            $table->dropForeign('religions_province_id_foreign');
        });
        Schema::table('provinces', function (Blueprint $table) {
            $table->dropForeign('provinces_region_id_foreign');
            $table->dropForeign('provinces_terrain_id_foreign');
            $table->dropForeign('provinces_item_id_foreign');
            $table->dropForeign('provinces_country_id_foreign');
            $table->dropForeign('provinces_controller_id_foreign');
            $table->dropForeign('provinces_religion_id_foreign');
            $table->dropForeign('provinces_level_id_foreign');
        });
        Schema::table('borders', function (Blueprint $table) {
            $table->dropForeign('borders_province_id_foreign');
            $table->dropForeign('borders_province_id_2_foreign');
        });
        Schema::table('country_item', function (Blueprint $table) {
            $table->dropForeign('country_item_country_id_foreign');
            $table->dropForeign('country_item_item_id_foreign');
        });
        Schema::table('country_unit_template', function (Blueprint $table) {
            $table->dropForeign('country_unit_template_country_id_foreign');
            $table->dropForeign('country_unit_template_unit_template_id_foreign');
        });
        Schema::table('units', function (Blueprint $table) {
            $table->dropForeign('units_unit_template_id_foreign');
            $table->dropForeign('units_country_id_foreign');
            $table->dropForeign('units_province_id_foreign');
            $table->dropForeign('units_origin_id_foreign');
        });
        Schema::table('building_template_unit_template', function (Blueprint $table) {
            $table->dropForeign('building_template_unit_template_unit_template_id_foreign');
            $table->dropForeign('building_template_unit_template_building_template_id_foreign');
        });
        Schema::table('movement_orders', function (Blueprint $table) {
            //
        });
        Schema::table('building_template_country', function (Blueprint $table) {
            $table->dropForeign('building_template_country_country_id_foreign');
            $table->dropForeign('building_template_country_building_template_id_foreign');
        });
        Schema::table('buildings', function (Blueprint $table) {
            $table->dropForeign('buildings_province_id_foreign');
            $table->dropForeign('buildings_building_template_id_foreign');
        });
        Schema::table('building_template_item', function (Blueprint $table) {
            $table->dropForeign('building_template_item_item_id_foreign');
            $table->dropForeign('building_template_item_building_template_id_foreign');
        });
        Schema::table('building_template_terrain', function (Blueprint $table) {
            $table->dropForeign('building_template_terrain_terrain_id_foreign');
            $table->dropForeign('building_template_terrain_building_template_id_foreign');
        });
    }
};
