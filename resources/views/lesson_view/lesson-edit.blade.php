
@extends('base-layout')

@section('content')
    
    <form action="/lessons/{{ $lesson->id }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="">lesson title</label>
            <input type="text" name="title" placeholder="{{ $lesson->title }}">
        </div>

        <div>
            <label for="">lesson details</label>
            <input type="text" name="details">
        </div>
        
        <button type="submit" class="btn btn-primary">edit</button>

    </form>
@endsection
