<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lesson;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$course_id,$chapter_id)
    {
        
        $lesson = lesson::where('course_id',$course_id)
                        ->where('chapter_id', $chapter_id)
                        ->get();

        return view('lesson_view.lesson-index',[
            'lesson' => $lesson
        ]);                
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$course_id,$chapter_id)
    {
         
        return view('lesson_view.lesson-create',[
            'course_id' => $course_id,
            'chapter_id'=> $chapter_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$course_id,$chapter_id)
    {
        $title = $request->input('title');
        $details = $request->input('details');
        
        $lesson = new lesson;
        $lesson->title = $title;
        $lesson->details = $details;
        $lesson->course_id = $course_id;
        $lesson->chapter_id = $chapter_id;
        $lesson->save();

      // return redirect('/{course_id}/{chapter_id}/lessons');
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
        $lesson = lesson::findOrfail($id); 
        return view('lesson_view.lesson-edit',[
            'lesson' => $lesson
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
        $details = $request->input('details');

        $lesson = lesson::findOrfail($id);    
        $lesson->title = $title;
        $lesson->details = $details;
        $lesson->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lesson = lesson::findOrfail($id);
        $lesson -> delete();

        return back();
    }
}
