<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter_quizzes;
class ChapterQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$lesson_id)
    {
       $lesson_quizzes = chapter_quizzes::where('lesson_id',$lesson_id)->get();
       return view('quiz_view.quiz-index', [
           'lesson_quizzes' => $lesson_quizzes
       ]);
    }

    public function index2(Request $request,$lesson_id)
    {
       $lesson_quizzes = chapter_quizzes::where('lesson_id',$lesson_id)->get();
       return view('welcome-quiz-qsts', [
           'lesson_quizzes' => $lesson_quizzes
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$lesson_id)
    {
        return view('quiz_view.quiz-create',[
            'lesson_id' => $lesson_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$lesson_id)
    {
        $title = $request->input('title');

        $lesson_quizzes = new chapter_quizzes;
        $lesson_quizzes->lesson_id = $lesson_id;
        $lesson_quizzes->title = $title;
        $lesson_quizzes->save();

        return back();
    }
    public function show($id)
    {
        $lesson_quizzes = Chapter_quizzes::findOrfail($id);

        return view('quiz_view.quiz-show', [
            'lesson_quizzes' => $lesson_quizzes
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson_quizzes = chapter_quizzes::findOrfail($id); 
        return view('quiz_view.quiz-edit',[
            'lesson_quizzes' => $lesson_quizzes 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $title = $request->input('title');
        $lesson_quizzes = chapter_quizzes::findOrfail($id); 

        $lesson_quizzes->title = $title;
        $lesson_quizzes->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $lesson_quizzes = chapter_quizzes::findOrfail($id);
        $lesson_quizzes->delete();

        return back();
    }
}
