<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('first_team')->unsigned();
            $table->integer('second_team')->unsigned();
            $table->tinyInteger('first_team_score')->default('0');
            $table->tinyInteger('second_team_score')->default('0');
            $table->text('description');
            $table->date('match_date');
            $table->time('match_time');
            $table->foreign('first_team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('second_team')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('matches');
    }
}
