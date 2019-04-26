
@extends('layouts.app')

@section('title')
    edite lesson
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edite a Lesson</div>

                <div class="card-body">
                   
                        <form action="/admin/lessons/{{ $lesson->id }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">lesson title</label>
                                <input type="text" name="title" value="{{ $lesson->title }}" class="form-control">
                            </div>
                    
                            <div class="form-group">
                                    <label for="">lesson details</label>
                                    <textarea class="form-control" name="details" rows="35">{{ $lesson->details }}</textarea>
                            </div>
                            
                            
                            <div class="form-group">
                            
                                 <button type="submit" class="btn btn-primary">edit</button>
                                 <a href="/admin/lessons/{{ $lesson->id }}" class="btn btn-primary">Back</button></a>
                       
                            </div>
                    
                        </form>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection