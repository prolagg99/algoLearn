
@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edite the title of Chapter</div>

                <div class="card-body">
                   
                    <form action="/admin/chapters/{{$chapter->id}}" method="POST">
                            {{ csrf_field() }}
                
                        <div class="form-group">
                            <label for=""> Set the new title </label><br>
                            <input type="text" name="title" value="{{$chapter->title}}" class="form-control">
                            
                        </div>
                
                        <div class="form-group">
                            
                        <button type="submit" class="btn btn-primary">edit</button>
                        <a href="/admin/welcome" class="btn btn-primary">Back</button></a>
                
                        </div>
                
                     </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection