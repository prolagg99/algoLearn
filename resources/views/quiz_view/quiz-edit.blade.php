@extends('base-layout')

@section('content')
<form action="/quizzes/{{ $chapter_quizzes->id }}" method="post">
    {{ csrf_field() }}
    <div>
        <label for="">the neww quiz title</label>
        <input type="text" name="title" placeholder="{{$chapter_quizzes->title}}">
    </div>

    <button type="submit" class="btn btn-primary">edit</button>

</form>
@endsection