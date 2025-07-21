<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>@yield('title', 'Admin - HMSI')</title>
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
  <div class="container">
    <aside class="sidebar">
      <h2>HMSI Admin</h2>
      <ul>
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.berita.index') }}">Kelola Berita</a></li>
        <li><a href="{{ route('admin.artikel.index') }}">Kelola Artikel</a></li>
        <li><a href="{{ route('admin.event.index') }}">Kelola Event</a></li>
        <li><a href="{{ route('admin.pengurus.index') }}">Kelola Pengurus</a></li>
        <li><a href="{{ route('admin.departemen.index') }}">Kelola Departemen</a></li>
      </ul>
    </aside>

    <main class="main-content">
      @yield('content')
    </main>
  </div>
</body>
</html>
