
@extends('layouts.app')


@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Quiz Question</div>
    
                    <div class="card-body">
                       
                            <form action="/admin/{{ $quiz_id }}/qsts" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">quiz question</label>
                                    <textarea class="form-control" name="question" rows="5"></textarea>
                                </div>
                            
                                <div class="form-group">
                                    <label>type</label>
                                    <select name="type" class="form-control">
                                        <option value="input">Question as Input</option>
                                        <option value="list">Question as Select</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">options</label>
                                    <input type="text" name="options" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">right answer</label>
                                    <input type="text" name="right_answer" class="form-control">
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