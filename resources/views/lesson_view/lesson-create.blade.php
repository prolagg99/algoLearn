
@extends('base-layout')

@section('content')

    <form action="/{{ $course_id }}/{{ $chapter_id }}/lessons" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="">lesson title</label>
            <input type="text" name="title">
        </div>

        <div>
            <label for="">lesson details</label>
            <input type="text" name="details">
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>

    </form>
@endsection
