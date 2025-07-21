@extends('layouts.admin')

@section('title', 'Tambah Artikel')

@section('content')
<h1 class="mb-4">Tambah Artikel</h1>

@if ($errors->any())
  <div style="color:red; margin-bottom: 10px;">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form class="form-kelola" method="POST" action="{{ route('admin.artikel.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label>Judul</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
    </div>

    <div>
        <label>Ringkasan (Excerpt)</label>
        <textarea name="excerpt" rows="3">{{ old('excerpt') }}</textarea>
    </div>

    <div>
        <label>Isi Berita</label>
        <textarea name="body" rows="8">{{ old('body') }}</textarea>
    </div>

    <div>
        <label>Gambar (opsional)</label>
        <input type="file" name="image">
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection
