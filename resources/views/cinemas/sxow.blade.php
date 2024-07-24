@extends('layouts.app')

@section('content')
    <h1>{{ $cinema->name }}</h1>
    <p>Местоположение: {{ $cinema->location }}</p>
    <a href="{{ route('cinemas.index') }}">Назад к списку кинозалов</a>
@endsection
