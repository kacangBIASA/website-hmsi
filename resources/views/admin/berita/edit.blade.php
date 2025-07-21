@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')
    <h1 class="mb-4">Edit Berita</h1>

    @if ($errors->any())
        <div style="color:red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="form-kelola" method="POST" action="{{ route('admin.berita.update', $berita->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div>
            <label>Judul</label>
            <input type="text" name="title" value="{{ old('title', $berita->title) }}" required>
        </div>

        <div>
            <label>Ringkasan (Excerpt)</label>
            <textarea name="excerpt">{{ old('excerpt', $berita->excerpt) }}</textarea>
        </div>

        <div>
            <label>Isi Berita</label>
            <textarea name="body" rows="8">{{ old('body', $berita->body) }}</textarea>
        </div>

        <div>
            <label>Gambar Saat Ini:</label><br>
            @if ($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Gambar" style="max-width: 200px; margin-bottom: 10px;">
            @else
                <p><em>Tidak ada gambar</em></p>
            @endif
        </div>

        <div>
            <label>Ganti Gambar (opsional)</label>
            <input type="file" name="image">
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
