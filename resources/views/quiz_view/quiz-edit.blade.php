
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edite the title of Quiz</div>

                <div class="card-body">
                   
                        <form action="/admin/quizzes/{{ $lesson_quizzes->id }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">the new quiz title</label>
                                <input type="text" name="title" class="form-control" value="{{$lesson_quizzes->title}}">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">edit</button>
                            </div>
                        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection