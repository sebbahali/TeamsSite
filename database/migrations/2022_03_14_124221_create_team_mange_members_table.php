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
        Schema::create('team_mange_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('avatar');
            $table->string('role');
            $table->string('email')->nullable();
            $table->unsignedBigInteger('team_mange_id');
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_mange_id')
                ->on('team_manges')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('team_id')
                ->on('teams')
                ->references('id')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('team_mange_members');
    }
};
