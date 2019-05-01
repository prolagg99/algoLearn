<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    public $timestamps = false;
    protected $table = 'chapters';



    public function lessons() 
    {
        return $this->hasMany('App\lesson');
        
    }

    public function quiz() 
    {
        return $this->hasOneThrough(
            'App\chapter_quizzes',
            'App\lesson',
            'chapter_id',
            'lesson_id'
        );
        
    }

    public function quiz_qst() 
    {
        return $this->hasManyThrough(
            'App\chapter_quiz_questions',
            'App\lesson',
            'chapter_id',
            'lesson_id' 
        );
        
    }

   /* public function quiz() {
        return $this->hasOne('App\chapter_quizzes');
    } 

    public function quizQuestions() {
        return $this->hasManyThrough(
            'App\chapter_quiz_questions', 
            'App\chapter_quizzes',
            'chapter_id', 
            'quiz_id', 
            'id', 
            'id' 
        );
    }*/
}
