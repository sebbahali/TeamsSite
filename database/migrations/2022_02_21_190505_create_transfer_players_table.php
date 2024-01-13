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
        Schema::create('transfer_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('send_team_id');
            $table->unsignedBigInteger('basic_team_id');
            $table->string('player_id');
            $table->string('player_approve_doc')->nullable();
            $table->string('father_approve_doc')->nullable();
            $table->string('father_identy_doc')->nullable();
            $table->string('status');
            $table->uuid('transaction_id')->nullable();

            $table->foreign('send_team_id')->on('teams')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('basic_team_id')->on('teams')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('player_id')->on('players')->references('card_id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('transaction_id')->on('transactions')->references('id');
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
        Schema::dropIfExists('transfer_players');
    }
};
