@extends('layouts.app')

@section('content')
    <h1>Выбор билетов</h1>
    <form action="{{ route('ticket-orders.store') }}" method="POST">
        @csrf
        <label for="showtime_id">Выберите сеанс:</label>
        <select name="showtime_id" id="showtime_id">
            @foreach ($showtimes as $showtime)
                <option value="{{ $showtime->id }}">{{ $showtime->movie->title }} - {{ $showtime->start_time }}</option>
            @endforeach
        </select>
        <button type="submit">Выбрать</button>
    </form>
@endsection
