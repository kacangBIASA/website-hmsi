@extends('layouts.app')

@section('content')

    <div class="hero-section">
        <h1>Event</h1>
    </div>

    <div class="content-area">
        <div class="search-container">
            <input type="search" placeholder="Search">
        </div>
        <div class="article-list">

            @foreach ($eventItems as $event)
                <div class="card">
                   <img src="" alt="Gambar Dummy" class="detail-image dummy-image-detail">
                    <div class="card-content">
                        <h3>{{ $event->title }}</h3>
                        <div class="metadata">
                            <span>{{ $event->published_at->format('d F Y') }}</span>
                        </div>
                        <p>{{ $event->excerpt }}</p>
                        <!-- <a href="#" class="button">Lihat Berita</a> -->
                        <a href="{{ route('event.show', $event) }}" class="button">Lihat Event</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
