

@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edite a Course</div>

                <div class="card-body">
                   
                     <form action="/admin/courses/{{$course->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Course Title</label>
                                <input name="title" value="{{$course->title}}" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Course Details</label>
                                <textarea name="details" class="form-control" rows="5">{{$course->details}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                     </form>
                    
                
                </div>
            </div>
        </div>
    </div>
</div>


@endsection