
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chapters</div>

                <div class="card-body">
                   
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">chapter Title</th>
                                <th scope="col"> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($chapters as $item)
                                <tr>
                                    <td>{{$item->title}}</td>
                                    <td>
                                    <form action="/admin/chapters/{{ $item->id }}/delete" method="POST">
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