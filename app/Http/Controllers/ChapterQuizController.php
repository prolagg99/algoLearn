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
    public function index(Request $request,$chapter_id)
    {
       $chapter_quizzes = chapter_quizzes::where('chapter_id',$chapter_id)->get();
       return view('quiz_view.quiz-index', [
           'chapter_quizzes' => $chapter_quizzes
       ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$chapter_id)
    {
        return view('quiz_view.quiz-create',[
            'chapter_id' => $chapter_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$chapter_id)
    {
        $title = $request->input('title');

        $chapter_quizzes = new chapter_quizzes;
        $chapter_quizzes->chapter_id = $chapter_id;
        $chapter_quizzes->title = $title;
        $chapter_quizzes->save();

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chapter_quizzes = chapter_quizzes::findOrfail($id); 
        return view('quiz_view.quiz-edit',[
            'chapter_quizzes' => $chapter_quizzes 
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
        $chapter_quizzes = chapter_quizzes::findOrfail($id); 

        $chapter_quizzes->title = $title;
        $chapter_quizzes->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $chapter_quizzes = chapter_quizzes::findOrfail($id);
        $chapter_quizzes->delete();

        return back();
    }
}
