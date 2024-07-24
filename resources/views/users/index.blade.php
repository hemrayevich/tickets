@extends('layouts.app')

@section('content')
    <h1>Пользователи</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }} - Email: {{ $user->email }}</li>
        @endforeach
    </ul>
@endsection


