
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Quiz</div>

                <div class="card-body">
                   
                        <form action="/admin/{{ $lesson_id }}/quizzes" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">quiz title</label>
                                <input type="text" name="title" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                                <a href="/admin/welcome/{{ $lesson_id }}/quiz/qsts" class="btn btn-primary">Back</a>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection