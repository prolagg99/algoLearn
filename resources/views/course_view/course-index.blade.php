@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Courses</div>

                <div class="card-body">
                   
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection