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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->string('slug')->unique('team_slug')->index('team_slug_index');
            $table->string('name')->unique('team_name')->index('team_name_index');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('phone');
            $table->string('message_code')->nullable();
            $table->string('logo')->nullable();
            $table->string('user_fullname');
            $table->text('description')->nullable();
            $table->foreign('club_id')->on('clubs')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->text('device_token')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('teams');
    }
};
