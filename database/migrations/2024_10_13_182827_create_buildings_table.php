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
        Schema::create('building_templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('image')->nullable();
            $table->tinyInteger('workers')->nullable();
            $table->string('emoji')->nullable();
            $table->timestamps();
        });

        Schema::create('building_template_country', function (Blueprint $table) {
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('building_template_id');
            $table->timestamps();
            $table->primary(array('country_id', 'building_template_id'));
        });

        Schema::create('buildings', function (Blueprint $table) {
            $table->unsignedBigInteger('province_id');
            $table->unsignedBigInteger('building_template_id');
            $table->unsignedInteger('quantity');
            $table->timestamps();
            $table->primary(array('province_id', 'building_template_id'));
        });

        Schema::create('building_template_item', function (Blueprint $table) {
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('building_template_id');
            $table->double('build_cost');
            $table->double('production');
            $table->timestamps();
            $table->primary(array('item_id', 'building_template_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('building_templates');

        Schema::dropIfExists('country_buildings');

        Schema::dropIfExists('buildings');

        Schema::dropIfExists('building_template_item');
    }
};
