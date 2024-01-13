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
        Schema::create('year_update_team', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('year_update_id');
            $table->unsignedBigInteger('team_id');
            $table->uuid('transaction_id')->nullable();
            $table->string('status');
            $table->double('cost')->default(null);
            $table->foreign('year_update_id')->on('year_updates')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('team_id')->on('teams')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('year_update_team');
    }
};
