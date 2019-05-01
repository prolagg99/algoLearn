<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Foundation\Console\ServeCommand;

class CreateLessonQuizQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {         
        Schema::create('lesson_quiz_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lesson_id');
            $table->bigInteger('quiz_id');
            $table->text('question');
            $table->enum('type', ['list', 'input']);
            $table->text('options');
            $table->string('right_answer',60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapter_quiz_questions');
    }
}
