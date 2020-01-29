@extends('layouts.app')

@section('content')


@for($i=0;$i<count($questions);$i++)
    <div calss="tests">
    <h2 class="list">{{$questions[$i]['name']}}</h2><p>Name</p>
    <h2>{{$questions[$i]['expression']}}</h2><p>question</p>
        <a class="btn btn-primary" href="{{route('answer',$rd = $questions[$i]['id'])}}">See result</a>
    <hr>
@endfor

@endsection
