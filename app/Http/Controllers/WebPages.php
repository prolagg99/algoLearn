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

        
        $chapters = chapter::where('course_id', 1)->with('lessons')->get();
        
        
        Cookie::queue('lastpage2', '/chapitres', 3600);
        return view("web.chapitre1", [
            'chapters' => $chapters
        ]);
    }

    public function viewQuizPage(request $request) {

        $lesson_id=$request->lesson_id;
        
        $quiz = chapter_quizzes::where('lesson_id',$lesson_id)->with('quiz_qsts')->get();
       
        return view("welcome-quiz-qsts", [
            'quiz' => $quiz
        ]);
    }

    public function viewLessonDetails(request $request, $lesson_id) {

        $lesson = lesson::findOrfail($lesson_id);
        $chapter = chapter::findOrfail($lesson->chapter_id);
        $quiz = chapter_quizzes::where('lesson_id',$lesson_id)->with('quiz_qsts')->get();
       
        return view("web.Cours1", [
            'chapter' => $chapter,
            'quiz' => $quiz,
            'lesson' => $lesson,
        ]);
    }

    
}
