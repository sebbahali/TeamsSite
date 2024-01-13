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
        Schema::create('club_notefications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('club_id');
            $table->boolean('status')->default(0);
            $table->string('title')->nullable();
            $table->text('body')->nullable();
            $table->text('link')->nullable();
            $table->foreign('club_id')->on('clubs')->references('id')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('club_notefications');
    }
};
