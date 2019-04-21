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

        return view("web.chapitre1", [
            'chapters' => $chapters,
        ]);
    }
}
