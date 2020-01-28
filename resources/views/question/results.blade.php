@extends('layouts.app')

@section('content')
    <div calss="tests">

        <h2 class="list">{{$question['answer']}}</h2>
        <a class="btn btn-primary" href="{{route('tests.index')}}">Back to tests</a>
        <hr>

@endsection