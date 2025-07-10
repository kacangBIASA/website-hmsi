@extends('layouts.app')

@section('content')
    <div class="hero-section pengurus-bg">
        <h1>Pengurus</h1>
    </div>

    <div class="pengurus-wrapper">

        @php
            $departemen = [
                'Badan Pengurus Harian Inti' => [
                    'penjelasan' => 'Badan Pengurus Harian Inti adalah inti dari organisasi HMSI yang bertanggung jawab terhadap koordinasi dan pengawasan seluruh kegiatan dan program kerja yang dilakukan oleh himpunan.',
                    'tugas' => 'Menyelaraskan koordinasi dan sinergi antar departemen serta memastikan kelancaran seluruh kegiatan himpunan.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Himpunan Mahasiswa', 'nama' => 'M. Ferdyansyah Ibnu Zain'],
                        ['jabatan' => 'Wakil Ketua Himpunan Mahasiswa', 'nama' => 'M. Rizky Qoirul Huda'],
                        ['jabatan' => 'Sekretaris Umum', 'nama' => 'Trisna Fitri Handayani'],
                        ['jabatan' => 'Sekretaris 1', 'nama' => 'Anita Veronika Ciptajati'],
                        ['jabatan' => 'Bendahara Umum', 'nama' => 'Alicia Indira'],
                        ['jabatan' => 'Bendahara 1', 'nama' => 'Renata Zahra Rahmadani'],
                    ]
                ],
                'Badan Senat' => [
                    'penjelasan' => 'Badan Senat merupakan badan legislatif dalam HMSI yang berperan dalam pengawasan serta pemberian rekomendasi terhadap kegiatan organisasi.',
                    'tugas' => 'Melakukan evaluasi, monitoring, serta memberikan arahan dan rekomendasi terhadap pelaksanaan kegiatan dan program kerja HMSI.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Badan Senat', 'nama' => 'Marista Adelia Putri'],
                        ['jabatan' => 'Sekretaris Badan Senat', 'nama' => 'Yustika'],
                        ['jabatan' => 'Staff Badan Senat', 'nama' => 'Ahmad Nunu Gustama'],
                    ]
                ],
                'Pengembangan Sumber Daya Manusia' => [
                    'penjelasan' => 'Departemen yang bertugas mengembangkan potensi dan kapasitas sumber daya manusia di lingkungan HMSI.',
                    'tugas' => 'Melaksanakan pelatihan, pembinaan, serta kegiatan peningkatan kualitas anggota HMSI.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Dimas Nabil Arlia Syahputra'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Yasmin Naila Ramadhanti'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Azrabelva Juventia'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'M. Daiva Arga Azura'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Rama Galih Tri Sanjaya'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Dzikri Lathiful Qodim'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Cheva Satrio Utomo'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'M. Hadhie Nurrahman'],
                    ]
                ],
                'Hubungan Masyarakat' => [
                    'penjelasan' => 'Departemen yang menjalin komunikasi dan hubungan eksternal dengan pihak luar maupun internal himpunan.',
                    'tugas' => 'Menjalin kerja sama, relasi, serta menyampaikan informasi kegiatan HMSI kepada masyarakat luas.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Rafi Syeghani'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Dyah Lutfi Atviana'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Irfan Fathoni'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Revania Kyla'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Cito Julio Ibrahim'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'M. Rif’ah Iqbali'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Ayundha Claudia'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'M. Fisabilillah'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Alysha Refa Eka Salsabila'],
                    ]
                ],
                'Advokasi & Kesejahteraan' => [
                    'penjelasan' => 'Departemen yang menangani isu kesejahteraan mahasiswa serta advokasi terhadap hak dan kebutuhan mahasiswa.',
                    'tugas' => 'Mengelola kegiatan advokasi, survei, serta memberikan solusi terhadap masalah kesejahteraan mahasiswa.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Bigar Awan Daksa Reswara'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Desyka Widya Haryanti'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Bintang Dimas Prawira Satya'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Varhan Fiqih Naufaldy'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Amanda Rachmawati'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Ahmad Naufalianto'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Aura Iftitah'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Bagus Ardin Prayoga'],
                    ]
                ],
                'Pengembangan Minat & Bakat' => [
                    'penjelasan' => 'Departemen yang mengakomodasi minat dan bakat mahasiswa serta menyelenggarakan kegiatan pengembangan non-akademik.',
                    'tugas' => 'Menyelenggarakan kegiatan olahraga, seni, dan kompetisi untuk mendukung pengembangan pribadi mahasiswa.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Auditya Fariz Chrisnadeva'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Aulia Ainurrahma'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'M. Brilliant Andrian Handono'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Sabrina Salsabila'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'M. Zaki Winanda Putra F.'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Mustikaningrum Arselanita W. P.'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'M. Yaumil Aditya Warman'],
                    ]
                ],
                'Kewirausahaan' => [
                    'penjelasan' => 'Departemen yang mendorong semangat kewirausahaan di kalangan mahasiswa melalui kegiatan usaha.',
                    'tugas' => 'Membuka peluang usaha di lingkungan mahasiswa.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Zaza Syach Zayyaan Al Qud’s'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Dwi Zahratul Masruroh H.'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Ferdian Bimo Surya P.'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Della Amanda'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Moch. Fahrul FIrman D.'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Favian Fauzan Jungjungan'],
                    ]
                ],
                'Riset & Teknologi' => [
                    'penjelasan' => 'Departemen yang berfokus pada pengembangan riset dan inovasi teknologi di lingkungan HMSI.',
                    'tugas' => 'Menyelenggarakan kegiatan riset, lomba teknologi, dan pelatihan teknis.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Nasywa Ivena Avrillia P.'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Adela Kartika Putri'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Ridho Nasrullah'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Nailatul Iftori'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'M. Reyhandhani'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'M. Arya Putra Samudera'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Ahmad Aziz Wira W.'],
                    ]
                ],
                'Media & Informasi' => [
                    'penjelasan' => 'Departemen yang mengelola informasi, dokumentasi, dan media publikasi HMSI.',
                    'tugas' => 'Mengelola media sosial, dokumentasi kegiatan, serta menyebarluaskan informasi melalui berbagai media.',
                    'anggota' => [
                        ['jabatan' => 'Ketua Departemen', 'nama' => 'Febryan Dava Putra A.'],
                        ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Devina Putri Arianti'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Achmad Zaki'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Aryn Mutifa'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Kyla Salsabillah Lubis'],
                        ['jabatan' => 'Staff Departemen', 'nama' => 'Jihan Natasya Najwa'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Revan Permana Hakim P.'],
                        ['jabatan' => 'Staff Magang', 'nama' => 'Bryan Zefanya Maitimu'],
                    ]
                ],
            ];
        @endphp

        @foreach ($departemen as $nama => $data)
            <div class="pengurus-section">
                <h3 style="text-align:center; font-weight:bold;">"{{ $nama }}"</h3>
                <p style="text-align:justify;">{{ $data['penjelasan'] }}</p>
            </div>
            <div class="pengurus-section">
                <h3 style="text-align:center; font-weight:bold;">"Tugas Pokok"</h3>
                <p style="text-align:justify;">{{ $data['tugas'] }}</p>
            </div>
            <div class="pengurus-section">
                <h2>{{ $nama }}</h2>
                @php $jumlah = count($data['anggota']); @endphp

                @if($nama === 'Badan Senat')
                    <div class="pengurus-grid-senat">
                        <div class="pengurus-card">
                            <div class="foto-bulat">
                                @if (!empty($data['anggota'][0]['foto']))
                                    <img src="{{ asset($data['anggota'][0]['foto']) }}" alt="Foto {{ $data['anggota'][0]['nama'] }}">
                                @else
                                    <span>Foto<br>Pengurus</span>
                                @endif
                            </div>
                            <p class="jabatan">{{ $data['anggota'][0]['jabatan'] }}</p>
                            <p class="nama">{{ $data['anggota'][0]['nama'] }}</p>
                        </div>
                        <div class="senat-bawah">
                            @foreach (array_slice($data['anggota'], 1) as $index => $pengurus)
                                @php $senatCount = count($data['anggota']) - 1; @endphp
                                <div class="pengurus-card @if($senatCount % 2 !== 0 && $index === $senatCount - 1) fullwidth @endif">
                                    <div class="foto-bulat">
                                        @if (!empty($pengurus['foto']))
                                            <img src="{{ asset($pengurus['foto']) }}" alt="Foto {{ $pengurus['nama'] }}">
                                        @else
                                            <span>Foto<br>Pengurus</span>
                                        @endif
                                    </div>
                                    <p class="jabatan">{{ $pengurus['jabatan'] }}</p>
                                    <p class="nama">{{ $pengurus['nama'] }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="pengurus-grid">
                        @foreach ($data['anggota'] as $index => $pengurus)
                            <div class="pengurus-card @if($jumlah % 2 !== 0 && $index === $jumlah - 1) fullwidth @endif">
                                <div class="foto-bulat">
                                    @if (!empty($pengurus['foto']))
                                        <img src="{{ asset($pengurus['foto']) }}" alt="Foto {{ $pengurus['nama'] }}">
                                    @else
                                        <span>Foto<br>Pengurus</span>
                                    @endif
                                </div>
                                <p class="jabatan">{{ $pengurus['jabatan'] }}</p>
                                <p class="nama">{{ $pengurus['nama'] }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        @endforeach

    </div>
@endsection
