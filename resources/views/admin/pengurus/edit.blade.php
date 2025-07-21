@extends('layouts.admin')

@section('title', 'Edit Pengurus')

@section('content')
<h1 class="mb-4">Edit Pengurus</h1>

@if ($errors->any())
  <div style="color:red; margin-bottom: 10px;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.pengurus.update', $pengurus->id) }}" enctype="multipart/form-data" class="form-kelola">
    @csrf
    @method('PUT')

    <div>
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama', $pengurus->nama) }}" required>
    </div>

    <div>
        <label>Jabatan</label>
        <input type="text" name="jabatan" value="{{ old('jabatan', $pengurus->jabatan) }}" required>
    </div>

    <div>
        <label>Departemen</label>
        <select name="departemen_id" required>
            <option value="">-- Pilih Departemen --</option>
            @foreach ($departemenList as $departemen)
                <option value="{{ $departemen->id }}" {{ old('departemen_id', $pengurus->departemen_id) == $departemen->id ? 'selected' : '' }}>
                    {{ $departemen->nama }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label>Foto (opsional)</label>
        <input type="file" name="foto" accept="image/*">
        @if ($pengurus->foto)
            <p style="margin-top: 6px;">Foto saat ini: <br>
                <img src="{{ asset('storage/' . $pengurus->foto) }}" alt="Foto Pengurus" width="120">
            </p>
        @else
            <p><em>Tidak ada foto sebelumnya.</em></p>
        @endif
    </div>

    <button type="submit">Update</button>
</form>
@endsection
