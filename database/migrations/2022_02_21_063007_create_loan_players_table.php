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
        Schema::create('loan_players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('send_team_id');
            $table->unsignedBigInteger('basic_team_id');
            $table->string('player_id');
            $table->text('note')->nullable();
            $table->date('start');
            $table->date('end');
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
        Schema::dropIfExists('loan_players');
    }
};
