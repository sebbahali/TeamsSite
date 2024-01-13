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
        Schema::create('team_message_replies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('team_message_id');
            $table->unsignedBigInteger('team_id');
            $table->text('body');
            $table->foreign('team_message_id')->on('team_messages')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('team_id')->on('teams')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('team_message_replies');
    }
};
