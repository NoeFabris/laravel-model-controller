@extends('layout/default')

@section('page', 'Movies DB')

@section('movies')

    @foreach($movieList as $key => $movies)
        <h1>{{$movieList[$key]['title']}}</h1>
    @endforeach

@endsection