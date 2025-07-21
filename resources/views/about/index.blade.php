@extends('layouts.app')

@section('content')
    <div class="hero-section">
        <h1>About Us</h1>
    </div>

    <div class="container">
        <div class="description">
            <h2>“HIMPUNAN MAHASISWA SISTEM INFORMASI”</h2>
            <p>
                Himpunan Mahasiswa Sistem Informasi (HMSI) adalah organisasi mahasiswa
                yang berfokus pada pengembangan dan peningkatan kualitas mahasiswa
                Program Studi Sistem Informasi di Telkom University Surabaya. HMSI
                bertujuan untuk menjadi wadah bagi mahasiswa dalam mengembangkan
                potensi diri, meningkatkan keterampilan, dan memperluas jaringan
                profesional di bidang sistem informasi.
            </p>
        </div>
    </div>
    <div class="container-about">
        <div class="visi">
            <h2>VISI</h2>
            <p>
                Menjadi organisasi mahasiswa yang inovatif, berdaya saing, dan
                berkontribusi dalam pengembangan sistem informasi di Telkom University
                Surabaya. HMSI berkomitmen untuk menciptakan lingkungan yang mendukung
                pengembangan akademik, profesional, dan sosial mahasiswa Sistem
                Informasi.
            </p>
        </div>
        <div class="misi">
            <h2>MISI</h2>
            <p>
                1. Meningkatkan kualitas akademik mahasiswa Sistem Informasi melalui
                program-program pendidikan dan pelatihan yang relevan dengan perkembangan
                teknologi informasi terkini.
                <br>
                2. Mendorong partisipasi aktif mahasiswa dalam kegiatan organisasi,
                penelitian, dan pengabdian masyarakat untuk meningkatkan keterampilan
                dan pengalaman praktis di bidang sistem informasi.
                <br>
                3. Membangun jaringan profesional yang kuat antara mahasiswa, alumni,
                dan industri untuk mendukung pengembangan karir mahasiswa Sistem
                Informasi.
                <br>
                4. Menjadi jembatan komunikasi antara mahasiswa Sistem Informasi dengan
                pihak fakultas, universitas, dan industri dalam rangka meningkatkan
                kualitas pendidikan dan relevansi kurikulum dengan kebutuhan industri.
            </p>
        </div>
        <div class="map-yt">
            <div class="maps">
                <h2>Lokasi Kampus</h2>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3797403374724!2d112.72634007400214!3d-7.311166492696741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sUniversitas%20Telkom%20Surabaya!5e0!3m2!1sid!2sus!4v1752649084340!5m2!1sid!2sus"
                    style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="youtube">
                <h2>Company Profile</h2>
                <iframe src="https://www.youtube.com/embed/QIas1H7H_m0?si=n_K5_Uq4jKdgx8Wd" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection
