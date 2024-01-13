<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->unsignedBigInteger('team_id');
            $table->enum('join_type', ['player', 'loan_out', 'loan_in']);
            $table->enum('type', ['in', 'out']);
            $table->unsignedBigInteger('player_id');
            $table->string('s')->nullable();
            $table->string('r')->nullable();
            $table->string('y')->nullable();
            $table->text('g')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_players');
    }
};
