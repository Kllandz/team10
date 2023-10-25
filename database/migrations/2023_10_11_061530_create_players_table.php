<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id()->comment('編號(主鍵)');
            $table->string('name')->comment('選手');
            $table->integer('tid')->unsigned()->comment('隊伍(外部鍵)');
            $table->string('postition')->comment('位置');
            $table->string('nationality')->nullable()->comment('國籍');
            $table->integer('age')->unsigned()->nullable()->comment('年齡');
            $table->integer('year')->unsigned()->nullable()->comment('年資');
            $table->string('gender')->nullable()->comment('性別');
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
}
