@extends('layouts.admin')

@section('title', 'Kelola Pengurus')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Kelola Pengurus</h1>
        <a href="{{ route('admin.pengurus.create') }}" class="btn-tambah">+ Tambah Pengurus</a>
    </div>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <table class="table-kelola">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Departemen</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pengurusList as $pengurus)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengurus->nama }}</td>
                    <td>{{ $pengurus->jabatan }}</td>
                    <td>{{ $pengurus->departemen->nama ?? '-' }}</td>
                    <td>
                        @if ($pengurus->foto)
                            <img src="{{ asset('storage/' . $pengurus->foto) }}" alt="{{ $pengurus->nama }}" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                        @else
                            <em>Tidak ada foto</em>
                        @endif
                    </td>
                    <td>
                        <div class="flex-aksi">
                        <a href="{{ route('admin.pengurus.edit', $pengurus->id) }}" class="btn-aksi edit">Edit</a>
                        <form action="{{ route('admin.pengurus.destroy', $pengurus->id) }}" method="POST" class="inline-form" onsubmit="return confirm('Yakin ingin menghapus pengurus ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-aksi hapus">Hapus</button>
                        </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">Belum ada data pengurus.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
