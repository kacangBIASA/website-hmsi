@extends('layouts.admin')

@section('title', 'Tambah Departemen')

@section('content')
<h1 class="mb-4">Tambah Departemen</h1>

@if ($errors->any())
    <div style="color:red; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.departemen.store') }}" class="form-kelola">
    @csrf

    <div>
        <label>Nama Departemen</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>
    </div>

    <div>
        <label>Penjelasan Departemen</label>
        <textarea name="deskripsi" rows="3" required>{{ old('deskripsi') }}</textarea>
    </div>

    <div>
        <label>Tugas Pokok</label>
        <textarea name="tugas_pokok" rows="3" required>{{ old('tugas_pokok') }}</textarea>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
