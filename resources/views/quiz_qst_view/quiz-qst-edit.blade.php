@extends('base-layout')

@section('content')
    <form action="/qsts/{{ $chapter_quiz_questions->id }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="">question</label>
            <input type="text" name="question" placeholder="{{$chapter_quiz_questions->question}}">
        </div>
        <div>
            <label for="">type</label>
            <input type="text" name="type" placeholder="{{$chapter_quiz_questions->type}}">
        </div>
        <div>
            <label for="">options</label>
            <input type="text" name="options" placeholder="{{$chapter_quiz_questions->options}}">
        </div>
        <div>
            <label for="">right answer</label>
            <input type="text" name="right_answer" placeholder="{{$chapter_quiz_questions->right_answer}}">
        </div>
        
        <button type="submit" class="btn btn-primary">edit</button>

    </form>
@endsection