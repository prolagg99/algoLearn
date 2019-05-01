<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\chapter;
use App\chapter_quiz_questions;
use Illuminate\Support\Facades\Cookie;
use App\chapter_quizzes;

class WebPages extends Controller
{
    
    public function viewLessonsPage() {

        
        $chapters = chapter::where('course_id', 1)->with('lessons')->with('quiz')->with('quiz_qst')->get();
        
        
        Cookie::queue('lastpage2', '/chapitres', 3600);
        return view("web.chapitre1", [
            'chapters' => $chapters
        ]);
    }

    public function viewLessonsPage2(request $request) {

        $lesson_id=$request->lesson_id;
        
        $quiz = chapter_quizzes::where('lesson_id',$lesson_id)->with('quiz_qsts')->get();
       
        return view("welcome-quiz-qsts", [
            'quiz' => $quiz
        ]);
    }

    
}
