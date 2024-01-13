<?php

use App\Enums\MatchStatus;
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
        Schema::create('competition_matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('home');
            $table->unsignedBigInteger('away');
            $table->unsignedBigInteger('competition_id');
            $table->dateTime('match_time')->nullable();
            $table->string('location')->nullable();
            $table->text('first_refree')->nullable();
            $table->text('second_refree')->nullable();
            $table->text('theree_refree')->nullable();
            $table->text('four_refree')->nullable();
            $table->text('five_refree')->nullable();
            $table->string('status')->default(MatchStatus::NotStart->value);
            $table->string('home_goals')->default(0);
            $table->string('away_goals')->default(0);
            $table->text('match_admin_report')->nullable();
            $table->text('four_refree_report')->nullable();
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
        Schema::dropIfExists('competition_matches');
    }
};
