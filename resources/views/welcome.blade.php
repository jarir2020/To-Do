<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Todo App</title>
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    </head>
    <body>
        <!-- Heading -->
        <h1>WELCOME TO TODO APP</h1>

        <!-- Buttons -->
        <div class="button-container">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn">Register</a>
                    @endif
                @endauth
            @endif
        </div>

        <!-- Footer -->
        <footer>
            &copy; {{ date('Y') }} ToDo APP. All rights reserved.
        </footer>
    </body>
</html>
