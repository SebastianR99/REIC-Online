<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('observations', function (Blueprint $table) {
            $table->bigIncrements('observation_id');
            $table->foreignId('observation_user')->references('id')->on('users');
            $table->foreignId('title_observations')->references('title_id')->on('titles');
            $table->text('observation_content');
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
        Schema::dropIfExists('observations', function (Blueprint $table){
            $table->dropForeign('observations_observation_user_foreign');
        });
    }
}
