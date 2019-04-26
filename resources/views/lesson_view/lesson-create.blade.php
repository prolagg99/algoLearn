@extends('layouts.app')

@section('title')
    create new lesson
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">create a new Lesson</div>

                <div class="card-body">
                   
                    <form action="/admin/{{ $course_id }}/{{ $chapter_id }}/lessons" method="POST">
                        {{ csrf_field() }}
                    
                        <div class="form-group">
                              
                            <label for="">lesson title</label>
                            <input type="text" name="title" class="form-control">
                            
                        </div>

                        <div class="form-group">
                            <label for="">lesson details</label>
                            <textarea class="form-control" name="details" rows="35"></textarea>
                        </div>
                
                        <div class="form-group">
                            
                             <button type="submit" class="btn btn-primary">Create</button>
                            <a href="/admin/1/{{$chapter_id}}/lessons" class="btn btn-primary">Back</button></a> 
                
                        </div>
                
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
