@extends('base-layout')

@section('content')
<form action="/{{ $lesson_id }}/questions" method="POST">
    {{ csrf_field() }}
    <div>
        <label for="">question</label>
        <input type="text" name="question">
    </div>
    <div>
        <label for="">type</label>
        <input type="text" name="type">
    </div>
    <div>
        <label for="">options</label>
        <input type="text" name="options">
    </div>
    <div>
        <label for="">right answer</label>
        <input type="text" name="right_answer">
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>

</form>
@endsection