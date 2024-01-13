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
        Schema::create('out_loan_players', function (Blueprint $table) {
            $table->id();
            $table->string('card_id')->unique();
            $table->unsignedBigInteger('team_id');
            $table->string('name');
            $table->date('birthdate');
            $table->date('start');
            $table->date('end');
            $table->string('sport_image')->nullable();
            $table->string('front_card_image')->nullable();
            $table->string('loan_letter')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('team_id')
                ->on('teams')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_loan_players');
    }
};
