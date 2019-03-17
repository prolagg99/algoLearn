@extends('base-layout')


@section('content')

<form action="/courses/{{$course->id}}" method="POST">
    @csrf
    <div class="form-group">
        <label>Course Title</label>
        <input name="title" value="{{$course->title}}" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Course Details</label>
        <div>
            <textarea name="details">{{$course->details}}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection