<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter_quiz_questions;
class ChapterQuizQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$quiz_id)
    {
        $chapter_quiz_questions=chapter_quiz_questions::where('quiz_id',$quiz_id)->get();
        return view('quiz_qst_view.quiz-qst-index', [
            'chapter_quiz_questions' => $chapter_quiz_questions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$lesson_id,$quiz_id)
    {
        return view('quiz_qst_view.quiz-qst-create',[
            'quiz_id'   =>$quiz_id,
            'lesson_id' =>$lesson_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$lesson_id,$quiz_id)
    {
        $question = $request->input('question');
        $type = $request->input('type');
        $options = $request->input('options');
        $right_answer = $request->input('right_answer');

        $chapter_quiz_questions = new chapter_quiz_questions;
        $chapter_quiz_questions->quiz_id = $quiz_id;
        $chapter_quiz_questions->lesson_id = $lesson_id;
        $chapter_quiz_questions->question = $question;
        $chapter_quiz_questions->type = $type;
        $chapter_quiz_questions->options = $options;
        $chapter_quiz_questions->right_answer =$right_answer;
        $chapter_quiz_questions->save();

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
        $chapter_quiz_questions = chapter_quiz_questions::findOrfail($id);
        return view('quiz_qst_view.quiz-qst-edit',[
            'chapter_quiz_questions' => $chapter_quiz_questions
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

        $chapter_quiz_questions = chapter_quiz_questions::findOrfail($id);
        $chapter_quiz_questions->question = $question;
        $chapter_quiz_questions->type = $type;
        $chapter_quiz_questions->options = $options;
        $chapter_quiz_questions->right_answer =$right_answer;
        $chapter_quiz_questions->save();

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
        $chapter_quiz_questions = chapter_quiz_questions::findOrfail($id);
        $chapter_quiz_questions->delete();

        return back();
    }
}
