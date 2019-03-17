<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chapter;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request,$course_id)
    {
        $chapter = chapter::where('course_id',$course_id)->get();
        return view('chapter_view.chapter-index',[
            'chapters' => $chapter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($course_id)
    {
        return view('chapter_view.chapter-create',[
            'cId'=>$course_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$course_id)
    {
       $title = $request->input('title');
      
       $chapter = new chapter;
       $chapter->title = $title;
       $chapter->course_id =$course_id;
       $chapter->save();
       return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapter = chapter::findOrfail($id);

        return view('chapter_view.chapter-show', [
            'chapter' => $chapter
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
        $chapter = chapter::findOrfail($id);
        return view('chapter_view.chapter-edit', [
            'chapter' => $chapter
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
        
        $chapter = chapter::findOrfail($id);
        $chapter->title = $title;
        $chapter->save();
        
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
       
        $chapter = chapter::findOrfail($id);
        $chapter->delete();

        return back();
    }
}
