@extends('layouts.app')

@section('content')

    <div class="hero-section">
        <h1>Berita</h1>
    </div>

    <div class="content-area">
        <div class="search-container">
            <input type="search" placeholder="Search">
        </div>
        <div class="article-list">

            @foreach ($beritaItems as $berita)
                <div class="card">
                   <img src="" alt="Gambar Dummy" class="detail-image dummy-image-detail">
                    <div class="card-content">
                        <h3>{{ $berita->title }}</h3>
                        <div class="metadata">
                            <span>{{ $berita->published_at->format('d F Y') }}</span>
                        </div>
                        <p>{{ $berita->excerpt }}</p>
                        <!-- <a href="#" class="button">Lihat Berita</a> -->
                        <a href="{{ route('berita.show', $berita) }}" class="button">Lihat Berita</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection