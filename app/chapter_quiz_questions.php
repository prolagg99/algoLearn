<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chapter_quiz_questions extends Model
{
    public $timestamps = false;
    protected $table = 'lesson_quiz_questions';
}
