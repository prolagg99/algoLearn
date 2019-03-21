
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Quiz Questions</div>

                <div class="card-body">
                   
                        <table class="table">
                            <thead>
                                <tr>
                                        <th scope="col">question</th>
                                        <th scope="col">type</th>
                                        <th scope="col">options</th>
                                        <th scope="col">right_answer</th>
                                        <th scope="col"> Actions </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($chapter_quiz_questions as $item)
                                <tr>
                                    <td>{{$item->question}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->options}}</td>
                                    <td>{{$item->right_answer}}</td>
                                    <td>
                                        <form action="/admin/qsts/{{ $item->id }}/delete" method="POST">
                                        {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    </tr>
                                    @endforeach
                        
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
