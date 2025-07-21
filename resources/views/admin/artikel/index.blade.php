@extends('layouts.admin')

@section('title', 'Kelola Artikel')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Kelola Artikel</h1>
        <a href="{{ route('admin.artikel.create') }}" class="btn-tambah">+ Tambah Artikel</a>
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
            @forelse ($articles as $index => $artikel)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $artikel->title }}</td>
                    <td>{{ $artikel->published_at->format('d M Y') }}</td>
                    <td>
                        <div class="flex-aksi">
                        <a href="{{ route('admin.artikel.edit',  $artikel->id) }}" class="btn-aksi edit">Edit</a>
                        <form action="{{ route('admin.artikel.destroy', $artikel->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus berita ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-aksi hapus">Hapus</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" style="text-align: center">Belum ada Artikel</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
