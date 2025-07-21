@extends('layouts.admin')

@section('title', 'Tambah Anggota Pengurus')

@section('content')
<h1 class="mb-4">Tambah Anggota Pengurus</h1>

@if ($errors->any())
    <div style="color:red; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('admin.pengurus.store') }}" enctype="multipart/form-data" class="form-kelola">
    @csrf

    <div>
        <label>Departemen</label>
        <select name="departemen_id" required>
            <option value="">-- Pilih Departemen --</option>
            @foreach ($departemenList as $departemen)
                <option value="{{ $departemen->id }}">{{ $departemen->nama }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Nama Anggota</label>
        <input type="text" name="nama" value="{{ old('nama') }}" required>
    </div>

    <div>
        <label>Jabatan</label>
        <input type="text" name="jabatan" value="{{ old('jabatan') }}" required>
    </div>

    <div>
        <label>Foto (opsional)</label>
        <input type="file" name="foto">
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
