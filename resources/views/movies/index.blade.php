

@section('content')
    <h1 class="mb-4">Фильмы</h1>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ Str::limit($movie->description, 150) }}</p>
                        <a href="{{ route('movies.show', $movie) }}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

