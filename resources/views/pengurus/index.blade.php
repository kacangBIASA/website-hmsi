@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <h1>Pengurus</h1>
    </div>

    <div class="container-pengurus">
        @foreach ($departemenList as $departemen)
            <div class="pengurus-section">
                <h3 style="text-align:center; font-weight:bold;">"{{ $departemen->nama }}"</h3>
                <p style="text-align:justify;">{{ $departemen->penjelasan }}</p>
                <h3 style="text-align:center; font-weight:bold;">"Tugas Pokok"</h3>
                <p style="text-align:justify;">{{ $departemen->tugas }}</p>
            </div>

            <div class="pengurus-section">
                <h2>{{ $departemen->nama }}</h2>
                @php $pengurusChunk = $departemen->pengurus->chunk(2); @endphp

                <div class="pengurus-grid-2col">
                    @foreach ($pengurusChunk as $pair)
                        <div class="pengurus-row @if ($pair->count() === 1) center-card @endif">
                            @foreach ($pair as $pengurus)
                                <div class="pengurus-card">
                                    <div class="foto-bulat">
                                        @if ($pengurus->foto)
                                            <img src="{{ asset('storage/' . $pengurus->foto) }}"
                                                alt="Foto {{ $pengurus->nama }}">
                                        @else
                                            <span>Foto<br>Pengurus</span>
                                        @endif
                                    </div>
                                    <p class="jabatan">{{ $pengurus->jabatan }}</p>
                                    <p class="nama">{{ $pengurus->nama }}</p>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
@endsection
