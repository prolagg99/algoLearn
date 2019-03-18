<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson_questions;
class LessonQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lesson_id)
    {
        $lesson_questions = lesson_questions::where('lesson_id',$lesson_id)->get();
        return view('question_view.question-index',[
            'lesson_questions' => $lesson_questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$lesson_id)
    {
        return view('question_view.question-create',[
            'lesson_id'=>$lesson_id
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
        $question = $request->input('question');
        $type = $request->input('type');
        $options = $request->input('options');
        $right_answer = $request->input('right_answer');

        $lesson_questions = new lesson_questions;
        $lesson_questions->lesson_id = $lesson_id;
        $lesson_questions->question = $question;
        $lesson_questions->type = $type;
        $lesson_questions->options = $options;
        $lesson_questions->right_answer =$right_answer;
        $lesson_questions->save();

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
        $lesson_questions = lesson_questions::findOrfail($id);
        return view('question_view.question-edit',[
            'lesson_questions' => $lesson_questions
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
        $question = $request->input('question');
        $type = $request->input('type');
        $options = $request->input('options');
        $right_answer = $request->input('right_answer');

        $lesson_questions = lesson_questions::findOrfail($id);
        $lesson_questions->question = $question;
        $lesson_questions->type = $type;
        $lesson_questions->options = $options;
        $lesson_questions->right_answer =$right_answer;
        $lesson_questions->save();

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
        $lesson_questions = lesson_questions::findOrfail($id);
        $lesson_questions->delete();

        return back();
    }
}
