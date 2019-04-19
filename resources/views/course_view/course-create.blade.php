@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Course</div>

                <div class="card-body">
                        <form action="/admin/courses" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Course Title</label>
                                <input name="title" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Course Details</label>  
                                <textarea class="form-control" name="detail" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection