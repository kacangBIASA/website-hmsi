@extends('layouts.admin')

@section('title', 'Edit Departemen')

@section('content')
<h1 class="mb-4">Edit Departemen</h1>

@if ($errors->any())
  <div style="color:red; margin-bottom: 10px;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form method="POST" action="{{ route('admin.departemen.update', $departemen->id) }}" class="form-kelola">
    @csrf
    @method('PUT')

    <div>
        <label>Nama Departemen</label>
        <input type="text" name="nama" value="{{ old('nama', $departemen->nama) }}" required>
    </div>

    <div>
        <label>Penjelasan Departemen</label>
        <textarea name="penjelasan" rows="3" required>{{ old('penjelasan', $departemen->penjelasan) }}</textarea>
    </div>

    <div>
        <label>Tugas Pokok</label>
        <textarea name="tugas" rows="3" required>{{ old('tugas', $departemen->tugas) }}</textarea>
    </div>

    <button type="submit">Update</button>
</form>
@endsection
    