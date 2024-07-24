<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Ticket Booking</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="bg-dark text-white p-4">
    <div class="container">
        <h1>Cinema Ticket Booking</h1>
    </div>
</header>

<main class="py-4">
    <div class="container">
        @yield('content')
    </div>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>&copy; {{ date('Y') }} Cinema Ticket Booking</p>
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

