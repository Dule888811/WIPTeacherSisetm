@extends('layouts.app')

@section('content')



    @if(count($errors))
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    @endif

    <form action ="{{route('admin.question.store')}}" method="post">
        {{csrf_field()}}

        <div class="form-input">
            <label for="name"> Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-input">
            <label for="expression	">expression</label>
            <input type="text" name="expression">
        </div>

        <select name="test_id">
            <option value="test_id">{{$test_id}}</option>
        </select>
        <div class="form-input">
            <button type="submit">Submit</button>
        </div>
    </form>
    <a href="{{route('admin.questions.index')}}">Back to test</a>

@endsection