<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;
use App\chapter;
use App\chapter_quiz_questions;
use Illuminate\Support\Facades\Cookie;
use App\chapter_quizzes;
use App\user_lessons_progress;


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
       
        return view("web.Cours1", [
            'chapter' => $chapter,
            'lesson' => $lesson,
        ]);
    }

    public function viewQuizQsts(request $request, $lesson_id) {
        
        $lesson = lesson::findOrfail($lesson_id);
        $chapter = chapter::findOrfail($lesson->chapter_id);
        $quiz = chapter_quizzes::where('lesson_id',$lesson_id)->with('quiz_qsts')->first();
            
        $quiz_qsts = $quiz->quiz_qsts->random(5);
                
        return view("web.QCM1", [
            'chapter' => $chapter,
            'lesson' => $lesson,
            'quiz_qsts'=> $quiz_qsts
        ]);
    }

    public function StoreAnswer(Request $request,$lesson_id){
        $x =0;
        $quiz = chapter_quizzes::where('lesson_id',$lesson_id)->with('quiz_qsts')->first();

        $answersItem = array();
        $y =0;
        foreach ($quiz->quiz_qsts as $item) {
            foreach ($_POST['selected'] as $key => $value){  
                if($item['id'] == $key){
                    if($item['right_answer'] == $value){
                        $x++;
                        $answersItem[$y] = array(
                            'answer' => $value,
                            'value' => 'true'
                          );
                    }else{
                        $answersItem[$y] = array(
                            'answer' => $value,
                            'value' => 'false'
                          );
                    }
                }
                $y++;
            } 
        }


        $user_lesson_progress = new user_lessons_progress();
        $user_lesson_progress->user_id = \Auth::user()->id;
        $user_lesson_progress->lesson_id = $lesson_id;
        if($x > 2){
            $user_lesson_progress->is_done = '1';
        }else{
            $user_lesson_progress->is_done = '0';
        }
        $user_lesson_progress->save();

        
        
        return view("web.result", [
            'x' => $x,
            'answers' =>$answersItem
        ]);
    }

}
