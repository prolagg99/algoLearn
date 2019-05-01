<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
    public $timestamps = false;
    protected $table = 'lessons';

    public function quiz() 
    {
        return $this->hasOne('App\chapter_quizzes');
    }

    /*public function quiz_qsts() 
    {
        return $this->hasManyThrough(
            'App\chapter_quiz_questions',
            'App\chapter_quizzes',
            'quiz_id', 
            'lesson_id', 
        );
    }*/
}
