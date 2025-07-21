@extends('layouts.admin')

@section('title', 'Kelola Berita')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Kelola Berita</h1>
        <a href="{{ route('admin.berita.create') }}" class="btn-tambah">+ Tambah Berita</a>
    </div>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <table class="table-kelola">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($beritaItems as $index => $berita)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $berita->title }}</td>
                    <td>{{ $berita->published_at->format('d M Y') }}</td>
                    <td>
                        <a href="{{ route('admin.berita.edit', $berita->id) }}" class="btn-aksi edit">Edit</a>
                        <form action="{{ route('admin.berita.destroy', $berita->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-aksi hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" style="text-align: center">Belum ada berita</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
