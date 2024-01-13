<?php

use App\Enums\PlayerJoinStatus;
use App\Enums\PlayerYearStatus;
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
        Schema::create('players', function (Blueprint $table) {
            $table->string('card_id')->primary()->index('player_card_id');
            $table->string('name')->index('player_name');
            $table->date('birth_date');
            $table->string('location');
            $table->string('phone');
            $table->string('player_img');
            $table->string('card_identy_front');
            $table->string('card_identy_back');
            $table->string('birth_doc')->nullable();
            $table->string('father_check_doc')->nullable();
            $table->string('father_identy_card')->nullable();
            $table->string('approve_status')->default('draft');
            $table->string('join_status')->default(PlayerJoinStatus::UnJoin->value);
            $table->string('year_status')->default(PlayerYearStatus::Active->value);
            $table->string('register_number')->nullable();
            $table->date('request_date')->nullable();
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('player_disaple_id')->nullable(true)->default(NULL);
            $table->uuid('transaction_id')->nullable();

            $table->foreign('team_id')->on('teams')->references('id')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('player_disaple_id')->on('player_disaples')->references('id');
            $table->foreign('transaction_id')->on('transactions')->references('id');

            $table->softDeletes();
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
        Schema::dropIfExists('players');
    }
};
