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
        Schema::create('node_variants', function (Blueprint $table) {
            $table->id();

        });

        Schema::create('battlefield_nodes', function (Blueprint $table) {
            $table->integer('q');
            $table->integer('r');
            $table->integer('s');
            $table->foreignId('battle_id')->constrained();
            $table->foreignId('node_variant_id');
            $table->unique(['q', 'r', 's', 'battle_id']);
            $table->index(['battle_id']);
            $table->index(['q', 'r', 's', 'battle_id']);
            $table->primary(['q', 'r', 's', 'battle_id']);
        });

        Schema::create('battlefield_edges', function (Blueprint $table) {
            $table->integer('q1');
            $table->integer('r1');
            $table->integer('s1');
            $table->integer('q2');
            $table->integer('r2');
            $table->integer('s2');
            $table->foreignId('battle_id');
            $table->integer('weight');
            $table->index(['battle_id']);
            $table->index(['q1', 'r1', 's1', 'battle_id']);
            $table->index(['q2', 'r2', 's2', 'battle_id']);
//            $table->index(['q1', 'r1', 's1', 'q2', 'r2', 's2', 'battle_id']);
            $table->foreign(['battle_id', 'q1', 'r1', 's1'])
                ->references(['battle_id', 'q', 'r', 's'])
                ->on('battlefield_nodes');
            $table->foreign(['battle_id', 'q2', 'r2', 's2'])
                ->references(['battle_id', 'q', 'r', 's'])
                ->on('battlefield_nodes');
            $table->primary(['q1', 'r1', 's1', 'q2', 'r2', 's2', 'battle_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('battlefield_nodes');
        Schema::dropIfExists('battlefield_edges');
    }
};
