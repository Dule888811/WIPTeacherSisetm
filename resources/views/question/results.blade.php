extends('layouts.app')

@section('content')


    @for($i=0;$i<count($questions);$i++)

        <h2>{{$questions[$i]['name']}}</h2>
        <h2>{{$questions[$i]['expression']}}</h2>
        <h2>{{$questions[$i]['answer']}}</h2>
        <hr>
    @endfor


@endsection