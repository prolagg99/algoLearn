
@extends('layouts.app')

@section('title')
    show lessons
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lessons</div>

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
                                        <td>{!! $item->details !!}</td>
                                        <td>
                                        <form action="/admin/lessons/{{ $item->id }}/delete" method="POST">
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

