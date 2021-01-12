<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaguePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_players', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('psn_nickname');
            $table->integer('team_id')->nullable();
            $table->integer('league_id');

            $table->enum('status', ['created', 'active', 'inactive']);

            $table->foreign('team_id')->references('id')->on('league_teams');
            $table->foreign('league_id')->references('id')->on('leagues');

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
        Schema::dropIfExists('league_players');
    }
}
