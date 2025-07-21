@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="hero-section">
        <h1>Artikel</h1>
    </div>

    <div class="container">
        <div class="container-search">
            <input type="search" placeholder="Search"> {{-- search opsional --}}
        </div>

        <div class="container-list">
            @forelse ($articles as $artikel)
                <div class="container-card">
                    <div class="container-img">
                        @if ($artikel->image)
                            <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}"
                                style="width:100%; height:180px; object-fit:cover; border-radius: 10px;">
                        @else
                            <div style="width:100%; height:180px; background:#ccc; border-radius:10px;"></div>
                        @endif
                    </div>
                    <div class="container-info">
                        <h3>{{ $artikel->title }}</h3>
                        <div class="container-date">
                            <i class="fa fa-calendar"></i> {{ $artikel->published_at->format('d M Y') }}
                        </div>
                        <p>{{ Str::limit(strip_tags($artikel->excerpt), 150) }}</p>
                        <button class="container-button" onclick="openModal({{ $artikel->id }})">Lihat Artikel</button>
                    </div>
                </div>

                {{-- Modal Detail --}}
                <div id="modal-{{ $artikel->id }}" class="article-modal" style="display: none;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="modal-close" onclick="closeModal({{ $artikel->id }})">
                                <i class="fa fa-arrow-left"></i>
                            </button>
                            <h2>{{ $artikel->title }}</h2>
                        </div>

                        @if ($artikel->image)
                            <div style="text-align: center; margin: 20px 0;">
                                <img src="{{ asset('storage/' . $artikel->image) }}" alt="{{ $artikel->title }}"
                                    style="max-width: 100%; max-height: 300px; border-radius: 10px; object-fit: cover;">
                            </div>
                        @endif

                        <div style="margin-bottom: 1rem; color: #333;">
                            <i class="fa fa-calendar"></i> {{ $artikel->published_at->format('d M Y') }}
                        </div>

                        <div style="text-align: justify; font-size: 1rem; line-height: 1.6;">
                            {!! $artikel->body !!}
                        </div>
                    </div>
                </div>
            @empty
                <p>Belum ada artikel.</p>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="container-pagination">
            @if ($articles->lastPage() > 1)
                @if ($articles->onFirstPage())
                    <span>« Prev</span>
                @else
                    <a href="{{ $articles->previousPageUrl() }}">« Prev</a>
                @endif

                @for ($i = 1; $i <= $articles->lastPage(); $i++)
                    @if ($i == $articles->currentPage())
                        <span>{{ $i }}</span>
                    @else
                        <a href="{{ $articles->url($i) }}">{{ $i }}</a>
                    @endif
                @endfor

                @if ($articles->hasMorePages())
                    <a href="{{ $articles->nextPageUrl() }}">Next »</a>
                @else
                    <span>Next »</span>
                @endif
            @endif
        </div>
    </div>
    <script>
        function openModal(id) {
            document.getElementById('modal-' + id).style.display = 'flex';
        }

        function closeModal(id) {
            document.getElementById('modal-' + id).style.display = 'none';
        }
    </script>
@endsection
