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
        $previousLesson = lesson::where('id', '<', $lesson_id)->max('id');
        $firstLesson = lesson::where('id', '<', $lesson_id)->min('id');

        $progress = user_lessons_progress::where('lesson_id',$previousLesson);
        $progress = $progress->where('user_id',\Auth::user()->id)->first();
       
        $lastLesson = user_lessons_progress::where('user_id',\Auth::user()->id)->max('lesson_id');
        
        $lesson = lesson::findOrfail($lesson_id);
        $chapter = chapter::findOrfail($lesson->chapter_id);
      
        return view("web.Cours1", [
            'chapter' => $chapter,
            'lesson' => $lesson,
            'progress' => $progress,
            'prevID' => $previousLesson,
            'lastLesson' => $lastLesson,
            'firstId' => $firstLesson
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
            'quiz_qsts'=> $quiz_qsts,
            'answers' => [],
        ]);
    }

    public function StoreAnswer(Request $request,$lesson_id){
        $lesson = lesson::findOrfail($lesson_id);
        $chapter = chapter::findOrfail($lesson->chapter_id);
        
        $nextLesson = lesson::where('id', '>', $lesson_id)->first();
        


        $x =0;
        $quiz = chapter_quizzes::where('lesson_id',$lesson_id)->with('quiz_qsts')->first();
        $quiz_qsts_posted = [];
        $answersItem = array();
        $y =0;
        foreach ($quiz->quiz_qsts as $item) {
           
            foreach ($_POST['selected'] as $key => $value){  
                if($item['id'] == $key){
                    $quiz_qsts_posted[] = $item;
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
        $lesson_progress = user_lessons_progress::where('user_id',\Auth::user()->id);
        $lesson_progress->where('lesson_id',$lesson_id);
        $data = $lesson_progress->first();
        if($data == null){
                $user_lesson_progress = new user_lessons_progress();
            $user_lesson_progress->user_id = \Auth::user()->id;
            $user_lesson_progress->lesson_id = $lesson_id;
            if($x > 2){
                $user_lesson_progress->is_done = '1';
            }else{
                $user_lesson_progress->is_done = '0';
            }
            $user_lesson_progress->save();

        }else{
            if($x > 2){
                $data->is_done = '1';
            }else{
                $data->is_done = '0';
            }
            $data->save(); 
        }
       

        
        return view("web.QCM1", [
            'x' => $x,
            'chapter' => $chapter,
            'lesson' => $lesson,
            'quiz_qsts'=> $quiz_qsts_posted,
            'answers' =>$answersItem,
            'nextid' => $nextLesson->id
        ]);
    }

}
