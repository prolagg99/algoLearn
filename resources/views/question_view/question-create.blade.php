@extends('base-layout')

@section('content')
<form action="/{{ $lesson_id }}/questions" method="POST">
    {{ csrf_field() }}
    <div>
        <label for="">question</label>
        <input type="text" name="question">
    </div>

    <div class="form-group">
        <label>type</label>
        <select name="type" class="form-control">
            <option value="input">Question as Input</option>
            <option value="list">Question as Select</option>
        </select>
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