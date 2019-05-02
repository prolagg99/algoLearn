
@extends('layouts.app')

@section('title')
    show quiz & qsts
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
              
                <div class="card-header">
                        Quiz 
                        <a class="btn btn-primary float-right" href="/admin/{{ request()->lesson_id }}/quizzes/create" role="button">New Quiz</a>
                        <a class="btn btn-primary float-right" href="{{ URL::previous() }}" role="button" style="margin-right:3px;">back</a> 
                </div>
                
                <div class="card-body">
                    @foreach ($quiz as $item)
                        <h5 style="display:inline;"> Quiz Title : </h5>{{ $item->title }}
                        <div style="display: inline-block; float:right;">
                                <a class="btn btn-success" href="/admin/quizzes/{{$item->id}}/edit" role="button">Edit</a>
                        </div>
                        
                        <div style="display: inline-block; float:right; margin-right:5px;">
                        <form action="/admin/quizzes/{{$item->id}}/delete" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </div>
                        
                        <div style="display: inline-block; float:right; margin-right:5px;">
                            <a class="btn btn-primary float-right" href="/admin/{{$item->lesson_id}}/{{$item->id}}/qsts/create" role="button">New Qst</a>
                        </div> 
                        <hr>
                        
                        <?php $x=1 ?>
                        @foreach ($item->quiz_qsts as $quiz_qsts)
                        <hr>
                        <p style="display:inline;"> Qst {{$x}} : {!! $quiz_qsts->question !!}</p>
                        <div style="display: inline-block; float:right;">
                                <a class="btn btn-success" href="/admin/qsts/{{$quiz_qsts->id}}/edit" role="button">Edit</a>
                        </div>
                        
                        <div style="display: inline-block; float:right; margin-right:5px;">
                        <form action="/admin/qsts/{{$quiz_qsts->id}}/delete" method="POST">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </div>
                            <ul>
                                    <li>Type : {{ $quiz_qsts->type }}</li>
                                    <li>Options : 
                                        <ol>
                                            <li>{{ $quiz_qsts->options }}</li>
                                        </ol>
                                        
                                    </li>
                                    <li>Right answer : {{ $quiz_qsts->right_answer }}</li>
                            </ul>
                            <hr>
                            <?php $x++; ?>
                        @endforeach
                    @endforeach
                </div>
                     
                
               
            </div>
        </div>
    </div>
</div>


@endsection

