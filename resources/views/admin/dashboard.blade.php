@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
    <header>
        <h1>Dashboard Admin</h1>
    </header>

    <section class="card-container">
        <div class="card">
            <h3>Berita</h3>
            <p>{{ $beritaCount }} Postingan</p>
        </div>
        <div class="card">
            <h3>Artikel</h3>
            <p>{{ $artikelCount }} Artikel</p>
        </div>
        <div class="card">
            <h3>Event</h3>
            <p>{{ $eventCount }} Event Aktif</p>
        </div>
        <div class="card">
            <h3>Pengurus</h3>
            <p>{{ $pengurusCount }} Anggota</p>
        </div>
    </section>

    <section class="data-table">
        <h2>Daftar Berita Terbaru</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritaList as $index => $berita)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $berita->title }}</td>
                        <td>{{ $berita->created_at->format('d M Y') }}</td>
                        <td>{{ $berita->penulis ?? 'Admin' }}</td>
                        <td>
                            <div class="flex-aksi">
                                <a href="{{ route('admin.berita.edit', $berita->id) }}"><button>Edit</button></a>
                                <form method="POST" action="{{ route('admin.berita.destroy', $berita->id) }}"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus berita ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="data-table">
        <h2>Daftar Artikel Terbaru</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artikelList as $index => $artikel)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $artikel->title }}</td>
                        <td>{{ $artikel->created_at->format('d M Y') }}</td>
                        <td>{{ $artikel->penulis ?? 'Admin' }}</td>
                        <td>
                            <div class="flex-aksi">
                                <a href="{{ route('admin.artikel.edit', $artikel->id) }}"><button>Edit</button></a>
                                <form method="POST" action="{{ route('admin.artikel.destroy', $artikel->id) }}"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus berita ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <section class="data-table">
        <h2>Daftar Event Terbaru</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Penulis</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($eventList as $index => $event)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->created_at->format('d M Y') }}</td>
                        <td>{{ $event->penulis ?? 'Admin' }}</td>
                        <td>
                            <div class="flex-aksi">
                                <a href="{{ route('admin.event.edit', $event->id) }}"><button>Edit</button></a>
                                <form method="POST" action="{{ route('admin.event.destroy', $event->id) }}"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Hapus event ini?')">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
