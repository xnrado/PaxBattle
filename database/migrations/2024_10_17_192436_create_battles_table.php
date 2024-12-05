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
        Schema::create('battles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('province_id')->constrained();
            $table->integer('x_size')->unsigned();
            $table->integer('y_size')->unsigned();
            $table->timestamps();
        });

        Schema::create('sides', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('color',6);
            $table->timestamps();
        });

        Schema::create('battle_country_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('battle_id')->constrained();
            $table->foreignId('side_id')->constrained();
            $table->primary(array('user_id', 'country_id', 'battle_id'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('battle_country_user', function (Blueprint $table) {
            $table->dropForeign('battle_country_user_battle_id_foreign');
            $table->dropForeign('battle_country_user_user_id_foreign');
            $table->dropForeign('battle_country_user_country_id_foreign');
        });
        Schema::dropIfExists('battle_country_user');
        Schema::dropIfExists('battles');
    }
};
