@extends('layouts.app')

@section('content')
    <h1>Сеанс {{ $showtime->id }}</h1>
    <p>Фильм: {{ $showtime->movie->title }}</p>
    <p>Кинозал: {{ $showtime->cinema->name }}</p>
    <p>Время начала: {{ $showtime->start_time }}</p>
    <p>Доступные места: {{ $showtime->seats_available }}</p>
    <!-- Форма выбора билетов и оформления заказа -->
@endsection

