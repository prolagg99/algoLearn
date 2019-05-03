
@extends('layouts.app')

@section('title')
    show lessons
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Lessons
                    <a class="btn btn-primary float-right" href="/admin/1/{{$chapter_id}}/lessons/create" role="button">New Lesson</a>
                    <a class="btn btn-primary float-right" href="/admin/welcome" role="button" style="margin-right:3px;">back</a>
                </div>

                <div class="card-body">
                   
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">lesson Title</th>
                                        <th scope="col">lesson Details</th>
                                        <th scope="col"> Actions </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lesson as $item)
                                    <tr>
                                        <td>{{$item->title}}</td>
                                        <td>
                                            <?php  $out = strlen($item->details) > 50 ? substr($item->details,0,120)."..." : $item->details; ?>
                                            {!! $out !!}
                                            <p>
                                            <a href="/admin/lessons/{{ $item->id }}"><button type="submit" class="btn btn-info">Read More</button></a>
                                            <a href="/admin/welcome/{{$item->id}}/quiz/qsts"><button type="submit" class="btn btn-info">Show Quiz</button></a>
                                            </p>
                                        </td>
                                        <td >
                                            <form action="/admin/lessons/{{ $item->id }}/delete" method="POST">
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a href="/admin/lessons/{{ $item->id }}/edit"><button type="submit" class="btn btn-info">Edite</button></a>
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

