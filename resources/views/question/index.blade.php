@extends('layouts.app')

@section('content')


@for($i=0;$i<count($questions);$i++)

    <h2>{{$questions[$i]['name']}}</h2>
    <h2>{{$questions[$i]['expression']}}</h2>
    <h2><a href="../question.results/{{$questions[$i]['id']}}">See the results</a></h2>
        <hr>
@endfor


@endsection