@extends('layouts.app')

@section('title', 'Event')

@section('content')
    <div class="hero-section">
        <h1>Event</h1>
    </div>

    <div class="container">
        <div class="container-search">
            <input type="search" placeholder="Search"> {{-- search opsional --}}
        </div>

        <div class="container-list">
            @forelse ($eventItems as $event)
                <div class="container-card">
                    <div class="container-img">
                        @if ($event->image)
                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}"
                                style="width:100%; height:180px; object-fit:cover; border-radius: 10px;">
                        @else
                            <div style="width:100%; height:180px; background:#ccc; border-radius:10px;"></div>
                        @endif
                    </div>
                    <div class="container-info">
                        <h3>{{ $event->title }}</h3>
                        <div class="container-date">
                            <i class="fa fa-calendar"></i> {{ $event->published_at->format('d M Y') }}
                        </div>
                        <p>{{ Str::limit(strip_tags($event->excerpt), 150) }}</p>
                        <a href="{{ route('event.show', $event->slug) }}" class="container-button">Lihat Event</a>
                    </div>
                </div>
            @empty
                <p>Belum ada event.</p>
            @endforelse
        </div>

        <div class="container-pagination">
            @if ($eventItems->lastPage() > 1)
                @if ($eventItems->onFirstPage())
                    <span>« Prev</span>
                @else
                    <a href="{{ $eventItems->previousPageUrl() }}">« Prev</a>
                @endif

                @for ($i = 1; $i <= $eventItems->lastPage(); $i++)
                    @if ($i == $eventItems->currentPage())
                        <span>{{ $i }}</span>
                    @else
                        <a href="{{ $eventItems->url($i) }}">{{ $i }}</a>
                    @endif
                @endfor

                @if ($eventItems->hasMorePages())
                    <a href="{{ $eventItems->nextPageUrl() }}">Next »</a>
                @else
                    <span>Next »</span>
                @endif
            @endif
        </div>
    </div>
@endsection
