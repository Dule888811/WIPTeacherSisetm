@extends('layouts.app')

@section('content')


@for($i=0;$i<count($questions);$i++)
    <div calss="tests">
    <h2 class="list">Name</h2><p>{{$questions[$i]['name']}}</p>
    <h2>question</h2><p>{{$questions[$i]['expression']}}</p>
        <a class="btn btn-primary" href="{{route('answer',$rd = $questions[$i]['id'])}}">See result</a>
    <hr>89
@endfor

@endsection