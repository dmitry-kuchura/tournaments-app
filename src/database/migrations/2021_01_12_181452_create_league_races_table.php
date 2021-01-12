<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_races', function (Blueprint $table) {
            $table->id();

            $table->integer('stage_id');
            $table->integer('player_id');

            $table->integer('qualification_position')->nullable();
            $table->integer('finish_position')->nullable();
            $table->integer('pits')->nullable();

            $table->boolean('is_finished')->default(false);

            $table->integer('points')->default(0);

            $table->foreign('player_id')->references('id')->on('league_players');
            $table->foreign('stage_id')->references('id')->on('league_stages');

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
        Schema::dropIfExists('league_races');
    }
}
