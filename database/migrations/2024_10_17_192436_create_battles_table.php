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
            $table->string('description');
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('battle_country_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('battle_id');
            $table->primary(array('user_id', 'country_id', 'battle_id'));
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('battle_id')->references('id')->on('battles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('battle_player', function (Blueprint $table) {
            $table->dropForeign('battle_country_player_battle_id_foreign');
            $table->dropForeign('battle_country_player_player_id_foreign');
            $table->dropForeign('battle_country_player_country_id_foreign');
        });
        Schema::dropIfExists('battle_country_player');
        Schema::dropIfExists('battles');
    }
};
