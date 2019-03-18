@extends('base-layout')

@section('content')
    <form action="/questions/{{ $lesson_questions->id }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="">question</label>
            <input type="text" name="question" placeholder="{{$lesson_questions->question}}">
        </div>
        <div>
            <label for="">type</label>
            <input type="text" name="type" placeholder="{{$lesson_questions->type}}">
        </div>
        <div>
            <label for="">options</label>
            <input type="text" name="options" placeholder="{{$lesson_questions->options}}">
        </div>
        <div>
            <label for="">right answer</label>
            <input type="text" name="right_answer" placeholder="{{$lesson_questions->right_answer}}">
        </div>
        
        <button type="submit" class="btn btn-primary">edit</button>

    </form>
@endsection