@extends('base-layout')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">quiz title</th>
            <th scope="col"> Actions </th>
        </tr>
    </thead>
    <tbody>
        @foreach($chapter_quizzes as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>
            <form action="/quizzes/{{ $item->id }}/delete" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection