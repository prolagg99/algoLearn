@extends('base-layout')

@section('content')

<form action="/{{ $cId }}/chapters" method="POST">
    @csrf
    <div class="form-group">
        <label>chapter Title</label>
        <input name="title" type="text" class="form-control">
    </div>
    
    <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection