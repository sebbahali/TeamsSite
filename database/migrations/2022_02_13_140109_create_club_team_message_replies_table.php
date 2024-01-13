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
        Schema::create('club_team_message_replies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('club_team_message_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('user_id');
            $table->text('body');
            $table->string('sender');
            $table->foreign('club_team_message_id')->on('club_team_messages')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('team_id')->on('teams')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->on('users')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('club_team_message_replies');
    }
};
