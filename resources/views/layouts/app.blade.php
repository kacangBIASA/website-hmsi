<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel HMSI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <!-- <div class="logo">
            HMSI
        </div> -->
        <div class="logo">
    <a href="/">
        <img src="{{ asset('images/kabinet-logo.jpeg') }}" alt="HMSI" style="height: 40px;">
    </a>
    <span>HMSI</span>
</div>
        <nav>
            <a href="#">Home</a>
            <a href="{{ route('berita.index') }}"
                class="{{ request()->routeIs('berita.index') ? 'active' : '' }}">Berita</a>
            <a href="{{ route('articles.index') }}"
                class="{{ request()->routeIs('articles.index') ? 'active' : '' }}">Artikel</a>
            <a href="#">Events</a>
            <a href="#">Pengurus</a>
            <a href="#">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>© Develop by Ristek</div>
        <div>@hmsi_telkomsurabaya</div>
    </footer>

</body>

</html>