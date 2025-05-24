<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bookify</title>
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
</head>
<body>
    <header>
        <h1>Bookify</h1>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('auth.show') }}">Login/Register</a>
            <a href="{{ route('events') }}">Events</a>
            <a href="{{ route('admin') }}">Admin Panel</a>
            <a href="{{ route('booking') }}">Booking</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; 2024 Bookify, All rights reserved.
    </footer>
    <script src="{{ asset('frontend/script.js') }}"></script>
</body>
</html>