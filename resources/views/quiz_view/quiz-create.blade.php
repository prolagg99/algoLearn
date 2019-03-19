@extends('base-layout')

@section('content')
    <form action="/{{ $chapter_id }}/quizzes" method="post">
        {{ csrf_field() }}
        <div>
            <label for="">quiz title</label>
            <input type="text" name="title">
        </div>

        <button type="submit" class="btn btn-primary">Create</button>

    </form>
@endsection