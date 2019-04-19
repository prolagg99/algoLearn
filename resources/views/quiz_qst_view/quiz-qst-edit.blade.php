
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edite a Quiz Question</div>

                <div class="card-body">
                   
                        <form action="/admin/qsts/{{ $chapter_quiz_questions->id }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">question</label>
                                <textarea class="form-control" name="question" rows="5" value="{{$chapter_quiz_questions->question}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">type</label>
                                <input type="text" name="type" class="form-control" value="{{$chapter_quiz_questions->type}}">
                            </div>
                            <div class="form-group">
                                <label for="">options</label>
                                <input type="text" name="options" class="form-control" value="{{$chapter_quiz_questions->options}}">
                            </div>
                            <div class="form-group">
                                <label for="">right answer</label>
                                <input type="text" name="right_answer" class="form-control"  value="{{$chapter_quiz_questions->right_answer}}">
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