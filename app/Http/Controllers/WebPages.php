<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\chapter;
use App\chapter_quiz_questions;

class WebPages extends Controller
{
    
    public function viewLessonsPage() {


        $chapters = chapter::where('course_id', 1)->with('quiz')->with('lessons')->with('quizQuestions')->get();
        $lessonsCount = lesson::where('course_id', 1)->count();
        $questionsCount = chapter_quiz_questions::count();
        
        
        return view("web.lessons", [
            'chapters' => $chapters,
            'lessons_count' => $lessonsCount,
            'questions_count' => $questionsCount,
        ]);
    }
}
