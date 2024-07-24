@extends('layouts.app')

@section('content')
    <h1>Роли пользователей</h1>
    <ul>
        @foreach ($roles as $role)
            <li>{{ $role->name }} - {{ $role->description }}</li>
        @endforeach
    </ul>
@endsection
