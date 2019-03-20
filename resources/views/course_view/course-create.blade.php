@extends('layouts.app')


@section('content')

<form action="/courses" method="POST">
    @csrf
    <div class="form-group">
        <label>Course Title</label>
        <input name="title" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Course Details</label>
        <div>
            <textarea name="details"></textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection