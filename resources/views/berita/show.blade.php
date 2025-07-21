@extends('layouts.app')

@section('title', $berita->title)

@section('content')
    <div class="hero-section">
        <h1>Berita</h1>
    </div>

    <div class="container">
        {{-- Tombol Kembali --}}
        <div style="margin-bottom: 1.5rem;">
            <a href="{{ route('berita.index') }}" style="text-decoration: none; color: black; font-weight: 600; display: flex; align-items: center;">
                <i class="fa fa-arrow-left" style="margin-right: 8px;"></i> Kembali
            </a>
        </div>

        {{-- Judul & Tanggal --}}
        <h2 style="font-size: 1.5rem; font-weight: bold;">{{ $berita->title }}</h2>
        <div style="margin-bottom: 1rem; color: #555;">
            <i class="fa fa-calendar"></i> {{ $berita->published_at->format('d M Y') }}
        </div>

        {{-- Gambar --}}
        @if ($berita->image)
            <div style="text-align: center; margin-bottom: 2rem;">
                <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}"
                    style="max-width: 100%; max-height: 400px; object-fit: cover; border-radius: 10px;">
            </div>
        @endif

        {{-- Isi Konten --}}
        <div style="text-align: justify; font-size: 1rem; line-height: 1.6; color: #000; margin-bottom: 3rem;">
            {!! $berita->body !!}
        </div>
    </div>
@endsection
