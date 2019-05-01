<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapter_quizzes extends Model
{
    public $timestamps = false;
    protected $table = 'chapter_quizzes';

    public function quiz_qsts() 
    {
        return $this->hasMany('App\chapter_quiz_questions','quiz_id');
        
    }
}
