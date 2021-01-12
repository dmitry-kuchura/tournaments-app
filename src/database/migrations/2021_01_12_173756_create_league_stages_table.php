<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeagueStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('league_stages', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->integer('season_id');
            $table->string('circuit_name')->nullable();
            $table->string('laps')->nullable();
            $table->string('flag_image')->nullable();
            $table->string('track_image')->nullable();

            $table->foreign('season_id')->references('id')->on('league_seasons');

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
        Schema::dropIfExists('league_stages');
    }
}
