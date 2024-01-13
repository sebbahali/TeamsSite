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
        Schema::create('competition_issues', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('competition_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('team_id');
            $table->enum('sender', ['team', 'club']);
            $table->string('subject')->nullable();
            $table->text('body')->nullable();
            $table->string('file')->nullable();
            $table->string('status');
            $table->enum('type', ['issue', 'message']);
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
        Schema::dropIfExists('competition_issues');
    }
};
