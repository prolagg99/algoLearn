
@extends('base-layout')


@section('content')
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
                <td>{{$item->details}}</td>
                <td>
                <form action="/lessons/{{ $item->id }}/delete" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach

        </tbody>
  </table>
@stop

