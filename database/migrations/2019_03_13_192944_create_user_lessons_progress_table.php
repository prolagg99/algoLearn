<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLessonsProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lessons_progress', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('lesson_id');
            $table->boolean('is_done');
            $table->unique(array('user_id', 'lesson_id'));
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_lessons_progress');
    }
}
