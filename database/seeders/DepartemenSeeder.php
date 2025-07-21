<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departemen;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departemen::create([
            'nama' => 'Badan Pengurus Harian Inti',
            'penjelasan' => 'Badan Pengurus Harian Inti adalah inti dari organisasi HMSI yang bertanggung jawab terhadap koordinasi dan pengawasan seluruh kegiatan dan program kerja yang dilakukan oleh himpunan.',
            'tugas' => 'Menyelaraskan koordinasi dan sinergi antar departemen serta memastikan kelancaran seluruh kegiatan himpunan.'
        ]);

        Departemen::create([
            'nama' => 'Badan Senat',
            'penjelasan' => 'Badan Senat merupakan badan legislatif dalam HMSI yang berperan dalam pengawasan serta pemberian rekomendasi terhadap kegiatan organisasi.',
            'tugas' => 'Melakukan evaluasi, monitoring, serta memberikan arahan dan rekomendasi terhadap pelaksanaan kegiatan dan program kerja HMSI.'
        ]);

        Departemen::create([
            'nama' => 'Pengembangan Sumber Daya Manusia',
            'penjelasan' => 'Departemen yang bertugas mengembangkan potensi dan kapasitas sumber daya manusia di lingkungan HMSI.',
            'tugas' => 'Melaksanakan pelatihan, pembinaan, serta kegiatan peningkatan kualitas anggota HMSI.'
        ]);

        Departemen::create([
            'nama' => 'Hubungan Masyarakat',
            'penjelasan' => 'Departemen yang menjalin komunikasi dan hubungan eksternal dengan pihak luar maupun internal himpunan.',
            'tugas' => 'Menjalin kerja sama, relasi, serta menyampaikan informasi kegiatan HMSI kepada masyarakat luas.'
        ]);

        Departemen::create([
            'nama' => 'Advokasi & Kesejahteraan',
            'penjelasan' => 'Departemen yang menangani isu kesejahteraan mahasiswa serta advokasi terhadap hak dan kebutuhan mahasiswa.',
            'tugas' => 'Mengelola kegiatan advokasi, survei, serta memberikan solusi terhadap masalah kesejahteraan mahasiswa.'
        ]);

        Departemen::create([
            'nama' => 'Pengembangan Minat & Bakat',
            'penjelasan' => 'Departemen yang mengakomodasi minat dan bakat mahasiswa serta menyelenggarakan kegiatan pengembangan non-akademik.',
            'tugas' => 'Menyelenggarakan kegiatan olahraga, seni, dan kompetisi untuk mendukung pengembangan pribadi mahasiswa.'
        ]);

        Departemen::create([
            'nama' => 'Kewirausahaan',
            'penjelasan' => 'Departemen yang mendorong semangat kewirausahaan di kalangan mahasiswa melalui kegiatan usaha.',
            'tugas' => 'Membuka peluang usaha di lingkungan mahasiswa.'
        ]);

        Departemen::create([
            'nama' => 'Riset & Teknologi',
            'penjelasan' => 'Departemen yang berfokus pada pengembangan riset dan inovasi teknologi di lingkungan HMSI.',
            'tugas' => 'Menyelenggarakan kegiatan riset, lomba teknologi, dan pelatihan teknis.'
        ]);

        Departemen::create([
            'nama' => 'Media & Informasi',
            'penjelasan' => 'Departemen yang mengelola informasi, dokumentasi, dan media publikasi HMSI.',
            'tugas' => 'Mengelola media sosial, dokumentasi kegiatan, serta menyebarluaskan informasi melalui berbagai media.'
        ]);
    }
}
