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
        Schema::create('competition_issue_replies', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('competition_issue_id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('user_id');
            $table->text('body');
            $table->string('sender');
            $table->foreign('competition_issue_id')->on('competition_issues')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('competition_issue_replies');
    }
};
