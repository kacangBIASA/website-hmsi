<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMSI</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>

    <header>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/kabinet-logo.jpeg') }}" alt="HMSI" style="height: 40px; border-radius: 50px;">
            </a>
            <a href="/">HMSI</a>
        </div>
        <nav>
            <a href="{{ route('home.index') }}"
            class="{{ request()->routeIs('home.index') ? 'active' : '' }}">Home</a>
            <a href="{{ route('berita.index') }}"
                class="{{ request()->routeIs('berita.index') ? 'active' : '' }}">Berita</a>
            <a href="{{ route('articles.index') }}"
                class="{{ request()->routeIs('articles.index') ? 'active' : '' }}">Artikel</a>
            <a href="{{ route('event.index') }}"
                class="{{ request()->routeIs('event.index') ? 'active' : '' }}">Events</a>
            <a href="{{ route('pengurus.index') }}"
                class="{{ request()->routeIs('pengurus.index') ? 'active' : '' }}">Pengurus</a>
            <a href="{{route('about.index')}}"
            class="{{ request()->routeIs('about.index') ? 'active' : '' }}">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>© Develop by Ristek</div>
        <div>
            <a href="https://www.instagram.com/hmsi_telkomsurabaya?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">@hmsi_telkomsurabaya</a>
            <a href="https://www.instagram.com/event.hmsitelkomsby?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">@event_hmsitelkomsby</a>
        </div>
    </footer>

</body>
<script>
    function slideBerita(direction) {
        const slider = document.getElementById('beritaSlider');
        const scrollAmount = 300;
        slider.scrollBy({
            left: direction * scrollAmount,
            behavior: 'smooth'
        });
    }
</script>

</html>
