<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\chapter;
use App\chapter_quiz_questions;
use Illuminate\Support\Facades\Cookie;

class WebPages extends Controller
{
    
    public function viewLessonsPage() {

        
        $chapters = chapter::where('course_id', 1)->with('quiz')->with('lessons')->with('quizQuestions')->get();
        
        Cookie::queue('lastpage2', '/chapitres', 3600);
        return view("web.chapitre1", [
            'chapters' => $chapters,
        ]);
    }
}
