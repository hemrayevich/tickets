@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Сеансы</h1>

    <div class="row">
        @foreach ($showtimes as $showtime)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $showtime->movie->title }}</h5>
                        <p class="card-text">Кинозал: {{ $showtime->cinema->name }}</p>
                        <p class="card-text">Время начала: {{ $showtime->start_time }}</p>
                        <a href="{{ route('showtimes.show', $showtime) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
