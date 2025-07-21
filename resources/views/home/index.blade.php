@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <div class="hero-section">
        <h1>Selamat Datang di HMSI</h1>
        <h1>Mahasiswa Sistem Informasi Telkom University Surabaya</h1>
    </div>

    <div class="content-home">
        <div class="container-home">
            <div class="intro">
                <div class="left">
                    <h2>
                        "KABINET SATYAWIRA"
                        <span><img src="{{ asset('assets/logo-si.png') }}" alt="" /></span>
                    </h2>
                    <p>
                        "Kabinet Satyawira" adalah kabinet yang mengusung tema "Satyawira"
                        yang berarti "Kesatria yang Berani". Kabinet ini berkomitmen untuk
                        menjadi pelopor dalam inovasi dan keberanian, serta siap menghadapi
                        tantangan di era digital. Dengan semangat kesatria, kami bertekad
                        untuk memberikan kontribusi terbaik bagi Himpunan Mahasiswa Sistem
                        Informasi Telkom University Surabaya.
                    </p>
                </div>
                <div class="right">
                    <div class="img">
                        @if ($ketua && $ketua->foto)
                            <img src="{{ asset('storage/' . $ketua->foto) }}" alt="Ketua HMSI">
                        @else
                            <img src="{{ asset('images/default-profile.png') }}" alt="Default Ketua">
                        @endif
                        <div class="p">
                            <p>{{ $ketua->jabatan ?? 'Ketua HMSI' }}</p>
                            <p>{{ $ketua->nama ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="img">
                        @if ($wakil && $wakil->foto)
                            <img src="{{ asset('storage/' . $wakil->foto) }}" alt="Wakil Ketua HMSI">
                        @else
                            <img src="{{ asset('images/default-profile.png') }}" alt="Default Wakil Ketua">
                        @endif
                        <div class="p">
                            <p>{{ $wakil->jabatan ?? 'Wakil Ketua HMSI' }}</p>
                            <p>{{ $wakil->nama ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistik -->
        <div class="data-information">
            <div class="content">
                <div class="box">
                    <h3>Anggota HMSI</h3>
                    <iconify-icon icon="el:group"></iconify-icon>
                    <p>{{ $jumlahAnggota }} Anggota</p>
                </div>
                <div class="box">
                    <h3>Program Kerja</h3>
                    <iconify-icon icon="mdi:books"></iconify-icon>
                    <p>{{ $jumlahProgramKerja }} Program Kerja</p>
                </div>
                <div class="box">
                    <h3>Departemen</h3>
                    <iconify-icon icon="bi:diagram-3-fill"></iconify-icon>
                    <p>{{ $jumlahDepartemen }} Departemen</p>
                </div>
            </div>
        </div>

        <!-- Berita -->
        <div class="container-home">
            <div class="berita">
                <div class="slider-wrapper">
                    <h3>Berita Terbaru</h3>

                    <div class="slider-container">
                        <div class="slider" id="beritaSlider">
                            @foreach ($beritaList as $berita)
                                <div class="card-information">
                                    <div class="img-information">
                                        @if ($berita->image)
                                            <img src="{{ asset('storage/' . $berita->image) }}"
                                                alt="{{ $berita->title }}">
                                        @else
                                            <img src="{{ asset('assets/img-berita.jpg') }}" alt="Default Image">
                                        @endif
                                    </div>
                                    <p class="title">{{ $berita->title }}</p>
                                    <p class="description">{{ Str::limit(strip_tags($berita->excerpt), 100) }}</p>
                                    <a href="{{ route('berita.show', $berita->slug) }}">
                                        <button>
                                            Selengkapnya
                                            <iconify-icon icon="mdi:arrow-right" width="20"></iconify-icon>
                                        </button>
                                    </a>
                                </div>
                            @endforeach
                        </div>

                        <div class="slider-controls">
                            <button class="left" onclick="slideBerita(-1)">
                                <iconify-icon icon="eva:arrow-ios-back-outline" width="24"></iconify-icon>
                            </button>
                            <button class="right" onclick="slideBerita(1)">
                                <iconify-icon icon="eva:arrow-ios-forward-outline" width="24"></iconify-icon>
                            </button>
                        </div>
                    </div>

                    <div class="lihat-semua-btn">
                        <a href="{{ route('berita.index') }}">
                            <button>Lihat Semua Berita</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
