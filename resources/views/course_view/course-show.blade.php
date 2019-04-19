@extends('base-layout')


@section('content')

<h4> {{$course->title}} </h4>
<p>
    {!! $course->details !!}
</p>
@endsection