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
        Schema::create('competitions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('type');
            $table->string('location')->nullable('قريات');
            $table->date('start_date');
            $table->date('register_end');
            $table->boolean('allow_loan_in')->default(false);
            $table->integer('loan_in_count')->nullable();
            $table->boolean('allow_loan_out')->default(false);
            $table->integer('loan_out_count')->nullable();
            $table->boolean('allow_player_age')->default(false);
            $table->date('player_age_from')->nullable();
            $table->date('player_age_to')->nullable();
            $table->integer('min_player_age_count')->nullable();
            $table->integer('max_player_age_count')->nullable();
            $table->integer('mange_member_count')->nullable();
            $table->integer('player_count')->nullable();
            $table->double('subscription_price');
            $table->double('insurance_price');
            $table->string('status');
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
        Schema::dropIfExists('competitions');
    }
};
