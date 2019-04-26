
@extends('layouts.app')

@section('title')
    lesson
@endsection

@section('content')
    
    <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Lessons Title : {{ $lesson->title }}
                        </div>
        
                        <div class="card-body">
                            <p>{!! $lesson->details !!}</p>
                            <hr>
                            <div class="my-btns">
                                <div style="display: inline-block; float:right; margin-right:5px"><a class="btn btn-success" href="/admin/lessons/{{ $lesson->id }}/edit" role="button">Edit</a></div>
                                <div style="display: inline-block; float: right; margin-right:5px">
                                        <form action="/admin/lessons/{{ $lesson->id }}/delete" method="POST">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                </div>
                                <div style="display: inline-block; float:left;"><a href="/admin/1/{{$lesson->chapter_id}}/lessons"><button type="submit" class="btn btn-primary">Back</button></a></div>
                                
                                
                                
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection