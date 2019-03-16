@extends('base-layout')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Course Title</th>
        <th scope="col">Course Details</th>
        <th scope="col"> Actions </th>
      </tr>
    </thead>
    <tbody>
        @foreach($courses as $item)
        <tr>
            <td>{{$item->title}}</td>
            <td>{{$item->details}}</td>
            <td>
              <form action="/courses/{{$item->id}}/delete" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
@endsection