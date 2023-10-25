<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('team')->comment('隊伍');
            $table->integer('year')->unsigned()->comment('年份');          
            $table->string('divison')->comment('賽區');
            $table->integer('rank')->unsigned()->nullable()->comment('賽區排名');
            $table->double('rate')->unsigned()->nullable()->comment('今年勝率');
            $table->double('pastrate')->unsigned()->nullable()->comment('歷年勝率');
            $table->integer('games')->unsigned()->nullable()->comment('總場數');
            $table->year('founded')->comment('成立日期');
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
        Schema::dropIfExists('teams');
    }
}
