@extends('layouts.app')

@section('content')

    <div class="detail-page">

        <div class="detail-container">
            <div class="detail-header">
             
                <a href="{{ url()->previous() }}" class="back-button">&lt;</a>

                
                <div class="detail-header-content">
                    <h1>{{ $article->title }}</h1>
                    <div class="metadata">
                        <span>{{ $article->published_at->format('d F Y') }}</span>
                    </div>
                </div>
            </div>

          <img src="" alt="Gambar Dummy" class="detail-image dummy-image-detail">

            <div class="detail-body">
                <p>Ini adalah isi lengkap dari artikel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    justo purus, suscipit a cursus ac, ultrices ac sem. Proin suscipit dui sit amet nisi convallis, pretium
                    bibendum nisl vulputate.</p>
                <p>Morbi ut urna massa. Integer porta lacinia lacus, nec interdum lectus. Mauris sed mi aliquet, vulputate
                    arcu sit amet, iaculis mi. Aenean auctor, mi non dapibus lacinia, diam ligula varius libero, non
                    bibendum leo justo et odio.</p>
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
                            <p class="comment-text">Ini adalah contoh isi komentar yang ditampilkan di halaman. Tampilannya
                                akan seperti ini setelah pengguna mengirimkan komentar.</p>
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
                            <p class="comment-text">Contoh komentar kedua untuk melihat jarak dan tata letak antar komentar.
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