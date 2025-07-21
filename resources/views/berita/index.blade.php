@extends('layouts.app')

@section('title', 'Berita')

@section('content')
    <div class="hero-section">
        <h1>Berita</h1>
    </div>

    <div class="container">
        <div class="container-search">
            <input type="search" placeholder="Search"> {{-- search opsional --}}
        </div>

        <div class="container-list">
            @forelse ($beritaItems as $berita)
                <div class="container-card">
                    <div class="container-img">
                        @if ($berita->image)
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="{{ $berita->title }}"
                                style="width:100%; height:180px; object-fit:cover; border-radius: 10px;">
                        @else
                            <div style="width:100%; height:180px; background:#ccc; border-radius:10px;"></div>
                        @endif
                    </div>
                    <div class="container-info">
                        <h3>{{ $berita->title }}</h3>
                        <div class="container-date">
                            <i class="fa fa-calendar"></i> {{ $berita->published_at->format('d M Y') }}
                        </div>
                        <p>{{ Str::limit(strip_tags($berita->excerpt), 150) }}</p>
                        <a href="{{ route('berita.show', $berita->slug) }}" class="container-button">Lihat Berita</a>
                    </div>
                </div>
            @empty
                <p>Belum ada berita.</p>
            @endforelse
        </div>

        <div class="container-pagination">
            @if ($beritaItems->lastPage() > 1)
                @if ($beritaItems->onFirstPage())
                    <span>« Prev</span>
                @else
                    <a href="{{ $beritaItems->previousPageUrl() }}">« Prev</a>
                @endif

                @for ($i = 1; $i <= $beritaItems->lastPage(); $i++)
                    @if ($i == $beritaItems->currentPage())
                        <span>{{ $i }}</span>
                    @else
                        <a href="{{ $beritaItems->url($i) }}">{{ $i }}</a>
                    @endif
                @endfor

                @if ($beritaItems->hasMorePages())
                    <a href="{{ $beritaItems->nextPageUrl() }}">Next »</a>
                @else
                    <span>Next »</span>
                @endif
            @endif
        </div>

    </div>
@endsection
