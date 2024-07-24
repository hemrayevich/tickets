@extends('layouts.app')

@section('content')
    <h1>Оформление заказа</h1>
    <form action="{{ route('ticket-orders.store') }}" method="POST">
        @csrf
        <label for="showtime_id">Сеанс:</label>
        <input type="text" value="{{ $ticketOrder->showtime->movie->title }} - {{ $ticketOrder->showtime->start_time }}" disabled>
        <label for="total_amount">Итоговая сумма:</label>
        <input type="text" name="total_amount" value="{{ $ticketOrder->total_amount }}" disabled>
        <label for="user_id">Пользователь:</label>
        <input type="text" value="{{ $ticketOrder->user->name }}" disabled>
        <button type="submit">Оформить заказ</button>
    </form>
@endsection
