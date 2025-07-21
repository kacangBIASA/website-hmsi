<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departemen;
use App\Models\Pengurus;

class PengurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departemenList = Departemen::all()->keyBy('nama');

        $data = [
            'Badan Pengurus Harian Inti' => [
                ['jabatan' => 'Ketua Himpunan Mahasiswa', 'nama' => 'M. Ferdyansyah Ibnu Zain'],
                ['jabatan' => 'Wakil Ketua Himpunan Mahasiswa', 'nama' => 'M. Rizky Qoirul Huda'],
                ['jabatan' => 'Sekretaris Umum', 'nama' => 'Trisna Fitri Handayani'],
                ['jabatan' => 'Sekretaris 1', 'nama' => 'Anita Veronika Ciptajati'],
                ['jabatan' => 'Bendahara Umum', 'nama' => 'Alicia Indira'],
                ['jabatan' => 'Bendahara 1', 'nama' => 'Renata Zahra Rahmadani'],
            ],
            'Badan Senat' => [
                ['jabatan' => 'Ketua Badan Senat', 'nama' => 'Marista Adelia Putri'],
                ['jabatan' => 'Sekretaris Badan Senat', 'nama' => 'Yustika'],
                ['jabatan' => 'Staff Badan Senat', 'nama' => 'Ahmad Nunu Gustama'],
            ],
            'Pengembangan Sumber Daya Manusia' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Dimas Nabil Arlia Syahputra'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Yasmin Naila Ramadhanti'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Azrabelva Juventia'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'M. Daiva Arga Azura'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Rama Galih Tri Sanjaya'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Dzikri Lathiful Qodim'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Cheva Satrio Utomo'],
                ['jabatan' => 'Staff Magang', 'nama' => 'M. Hadhie Nurrahman'],
            ],
            'Hubungan Masyarakat' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Rafi Syeghani'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Dyah Lutfi Atviana'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Irfan Fathoni'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Revania Kyla'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Cito Julio Ibrahim'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'M. Rif’ah Iqbali'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Ayundha Claudia'],
                ['jabatan' => 'Staff Magang', 'nama' => 'M. Fisabilillah'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Alysha Refa Eka Salsabila'],
            ],
            'Advokasi & Kesejahteraan' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Bigar Awan Daksa Reswara'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Desyka Widya Haryanti'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Bintang Dimas Prawira Satya'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Varhan Fiqih Naufaldy'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Amanda Rachmawati'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Ahmad Naufalianto'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Aura Iftitah'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Bagus Ardin Prayoga'],
            ],
            'Pengembangan Minat & Bakat' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Auditya Fariz Chrisnadeva'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Aulia Ainurrahma'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'M. Brilliant Andrian Handono'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Sabrina Salsabila'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'M. Zaki Winanda Putra F.'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Mustikaningrum Arselanita W. P.'],
                ['jabatan' => 'Staff Magang', 'nama' => 'M. Yaumil Aditya Warman'],
            ],
            'Kewirausahaan' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Zaza Syach Zayyaan Al Qud’s'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Dwi Zahratul Masruroh H.'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Ferdian Bimo Surya P.'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Della Amanda'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Moch. Fahrul FIrman D.'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Favian Fauzan Jungjungan'],
            ],
            'Riset & Teknologi' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Nasywa Ivena Avrillia P.'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Adela Kartika Putri'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Ridho Nasrullah'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Nailatul Iftori'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'M. Reyhandhani'],
                ['jabatan' => 'Staff Magang', 'nama' => 'M. Arya Putra Samudera'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Ahmad Aziz Wira W.'],
            ],
            'Media & Informasi' => [
                ['jabatan' => 'Ketua Departemen', 'nama' => 'Febryan Dava Putra A.'],
                ['jabatan' => 'Sekretaris Departemen', 'nama' => 'Devina Putri Arianti'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Achmad Zaki'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Aryn Mutifa'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Kyla Salsabillah Lubis'],
                ['jabatan' => 'Staff Departemen', 'nama' => 'Jihan Natasya Najwa'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Revan Permana Hakim P.'],
                ['jabatan' => 'Staff Magang', 'nama' => 'Bryan Zefanya Maitimu'],
            ],
        ];

        foreach ($data as $namaDepartemen => $anggotaList) {
            $departemen = $departemenList[$namaDepartemen] ?? null;
            if (!$departemen) continue;

            foreach ($anggotaList as $anggota) {
                Pengurus::create([
                    'departemen_id' => $departemen->id,
                    'nama' => $anggota['nama'],
                    'jabatan' => $anggota['jabatan'],
                    'foto' => null,
                ]);
            }
        }
    }
}
