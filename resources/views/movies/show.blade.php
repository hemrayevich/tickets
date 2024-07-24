@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>Продолжительность: {{ $movie->duration }} минут</p>
    <a href="{{ route('movies.index') }}">Назад к списку фильмов</a>
@endsection

