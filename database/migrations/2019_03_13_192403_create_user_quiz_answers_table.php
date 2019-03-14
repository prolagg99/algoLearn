<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserQuizAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {      
        Schema::create('user_quiz_answers', function (Blueprint $table) {
           
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->bigInteger('quiz_question_id');
            $table->string('user_answer',60);
            $table->boolean('is_passed');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_quiz_answers');
    }
}
