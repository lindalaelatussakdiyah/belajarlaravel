<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/home') }}">Home</a>
            <a href="{{ url('/berita') }}">Berita</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="{{ url('/profile') }}">Profile</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 Belajar Laravel | Dibuat dengan ❤️</p>
    </footer>
</body>
</html>
