
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Chapter</div>

                <div class="card-body">
                   
                    <form action="/admin/{{ $cId }}/chapters" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>chapter Title</label>
                            <input name="title" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection