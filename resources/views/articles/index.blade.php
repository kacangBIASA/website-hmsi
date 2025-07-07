@extends('layouts.app')

@section('content')

    <div class="hero-section">
        <h1>Artikel</h1>
    </div>

    <div class="content-area">

        <div class="search-container">
            {{-- Tips: Untuk ikon search, Anda bisa menggunakan SVG atau Font Awesome di sini --}}
            <input type="search" placeholder="Search">
        </div>

        <div class="article-list">
            @foreach ($articles as $article)
                <div class="card">
                    {{-- Ganti 'asset($article->image)' dengan path gambar Anda jika sudah ada --}}
                    <img src="" alt="Gambar Dummy" class="dummy-image-list">

                    <div class="card-content">
                        <h3>{{ $article->title }}</h3>
                        <div class="metadata">
                            {{-- Tips: Tambahkan ikon kalender di sini --}}
                            <span>{{ $article->published_at->format('d F Y') }}</span>
                        </div>
                        <p>{{ $article->excerpt }}</p>
                        <!-- <a href="#" class="button">Lihat Berita</a> -->
                        <a href="{{ route('articles.show', $article) }}" class="button">Lihat Artikel</a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination-links">
            {{-- $articles->links() --}}
            {{-- Baris di atas di-nonaktifkan karena Anda menggunakan data statis. Jika pakai paginate, aktifkan lagi. --}}
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <span>...</span>
            <a href="#">6</a>
            <a href="#">NEXT ></a>
        </div>
    </div>

@endsection