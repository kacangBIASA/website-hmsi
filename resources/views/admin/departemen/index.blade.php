@extends('layouts.admin')

@section('title', 'Kelola Departemen')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Kelola Departemen</h1>
        <a href="{{ route('admin.departemen.create') }}" class="btn-tambah">+ Tambah Departemen</a>
    </div>

    @if (session('success'))
        <div class="alert-success">{{ session('success') }}</div>
    @endif

    <table class="table-kelola">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Departemen</th>
                <th>Penjelasan</th>
                <th>Tugas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($departemenList as $index => $departemen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $departemen->nama }}</td>
                    <td>{{ Str::limit($departemen->penjelasan, 100) }}</td>
                    <td>{{ Str::limit($departemen->tugas, 100) }}</td>
                    <td>
                        <div class="flex-aksi">
                            <a href="{{ route('admin.departemen.edit', $departemen->id) }}" class="btn-aksi edit">Edit</a>
                            <form action="{{ route('admin.departemen.destroy', $departemen->id) }}" method="POST"
                                class="inline-form" onsubmit="return confirm('Yakin ingin menghapus departemen ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-aksi hapus">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" style="text-align: center">Belum ada departemen</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
