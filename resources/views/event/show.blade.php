@extends('layouts.app')

@section('content')
    <div class="detail-page">

        <div class="detail-container">

            <div class="detail-header">

                <a href="{{ url()->previous() }}" class="back-button">&lt;</a>

                <div class="detail-header-content">
                    <h1>{{ $event->title }}</h1>
                    <div class="metadata">
                        <span>{{ $event->published_at->format('d F Y') }}</span>
                    </div>
                </div>
            </div>

           <img src="" alt="Gambar Dummy" class="detail-image dummy-image-detail">


            <div class="detail-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas justo purus, suscipit a cursus ac,
                    ultrices ac sem. Proin suscipit dui sit amet nisi convallis, pretium bibendum nisl vulputate. Morbi ut
                    urna massa. Integer porta lacinia lacus, nec interdum lectus. Mauris sed mi aliquet, vulputate arcu sit
                    amet, iaculis mi.</p>
                <p>Aenean auctor, mi non dapibus lacinia, diam ligula varius libero, non bibendum leo justo et odio.
                    Praesent quis justo eu felis placerat semper eu ut purus. Vivamus tincidunt orci non mauris facilisis
                    ornare nulla, a sodales metus tincidunt nec. Mauris faucibus leo at est mattis, ac bibendum leo cursus.
                    Nulla venenatis quis nisl quis porta. Morbi maximus consequat lectus.</p>
                <p>In accumsan, sapien ac venenatis bibendum, erat ipsum finibus odio, vel posuere sem quam vitae urna.
                    Morbi ut urna massa. Integer porta lacinia lacus. Praesent quis justo eu felis placerat semper.</p>
            </div>

            <div class="comment-section">
                <h3>Comment</h3>

                <div class="comment-form">
                    <img src="https://via.placeholder.com/40x40.png/999999?text=U" alt="User Avatar" class="comment-avatar">
                    <div class="comment-input-area">
                        <input type="text" placeholder="Nama Anda">
                        <textarea placeholder="Tulis komentar..." rows="3"></textarea>
                        <button type="submit" class="kirim-button">Kirim</button>
                    </div>
                </div>

                <div class="comment-list">
                    <div class="comment-item">
                        <img src="https://via.placeholder.com/40x40.png/999999?text=U" alt="User Avatar"
                            class="comment-avatar">
                        <div class="comment-content">
                            <span class="comment-author">Nama Pengomentar</span>
                            <p class="comment-text">contoh isi komentar</p>
                            <div class="comment-meta">
                                <span>07/07/2025</span>
                                <a href="#">Balas</a>
                            </div>
                        </div>
                    </div>

                    <div class="comment-item">
                        <img src="https://via.placeholder.com/40x40.png/999999?text=U" alt="User Avatar"
                            class="comment-avatar">
                        <div class="comment-content">
                            <span class="comment-author">Nama Lain</span>
                            <p class="comment-text">Contoh komentar
                            </p>
                            <div class="comment-meta">
                                <span>06/07/2025</span>
                                <a href="#">Balas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
