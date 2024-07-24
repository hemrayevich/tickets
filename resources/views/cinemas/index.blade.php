@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Кинозалы</h1>

    <div class="row">
        @foreach ($cinemas as $cinema)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $cinema->name }}</h5>
                        <p class="card-text">{{ $cinema->location }}</p>
                        <a href="{{ route('cinemas.show', $cinema) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
