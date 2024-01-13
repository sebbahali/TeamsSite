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
        Schema::create('club_team_messages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('target')->default('امين السر');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('team_id');
            $table->string('sender');
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
            $table->string('file')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('club_team_messages');
    }
};
