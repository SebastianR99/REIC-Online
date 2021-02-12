<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChaptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->bigIncrements('chapter_id');
            $table->foreignId('chapter_title')->references('title_id')->on('titles');
            $table->string('chapter_name');
            $table->string('chapter_des');
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
        Schema::dropIfExists('chapters', function (Blueprint $table){
            $table->dropForeign('chapters_chapter_title_foreign');
        });
    }
}
