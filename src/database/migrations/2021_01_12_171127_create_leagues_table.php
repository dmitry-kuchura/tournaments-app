<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeaguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leagues', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->longText('content')->nullable();
            $table->integer('admin_id');

            $table->enum('platform', ['ps4', 'xbox', 'ps5', 'pc'])->default('ps4');
            $table->enum('status', ['created', 'active', 'ended', 'archived'])->default('created');
            $table->enum('game', ['other', 'f1-2020', 'f1-2021', 'dirt-20', 'gran-turismo-sport', 'assetto-corsa'])->default('f1-2020');

            $table->foreign('admin_id')->references('id')->on('users');

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
        Schema::dropIfExists('leagues');
    }
}
