@extends('layouts.admin')

@section('title', 'Kelola Event')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Kelola Event</h1>
        <a href="{{ route('admin.event.create') }}" class="btn-tambah">+ Tambah Event</a>
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
            @forelse ($eventItems as $index => $event)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->published_at->format('d M Y') }}</td>
                    <td>
                        <div class="flex-aksi">
                        <a href="{{ route('admin.event.edit', $event->id) }}" class="btn-aksi edit">Edit</a>
                        <form action="{{ route('admin.event.destroy', $event->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus event ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-aksi hapus">Hapus</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="text-align: center">Belum ada event</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
