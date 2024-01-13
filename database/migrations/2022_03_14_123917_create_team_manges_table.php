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
        Schema::create('team_manges', function (Blueprint $table) {
            $table->id();
            $table->date('start');
            $table->date('end');
            $table->boolean('status')->default(1);
            $table->unsignedBigInteger('team_id');
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
        Schema::dropIfExists('team_manges');
    }
};
