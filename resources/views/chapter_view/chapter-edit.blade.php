@extends('base-layout')

@section('content')
    <form action="/chapters/{{$chapter->id}}" method="POST">
            {{ csrf_field() }}

        <div class="form-group">
            <label for="">  Title </label><br>
            <input type="text" name="title" placeholder="{{$chapter->title}}">
        </div>

        <div class="form-group">
            
           <button type="submit" class="btn btn-primary">edit</button>
  
        </div>




    </form>
@endsection