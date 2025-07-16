<?php
// database/seeders/BeritaSeeder.php
namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'title' => 'Judul Berita 1 dari Database',
            'slug' => 'judul-berita-1-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk berita pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari berita pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Berita::create([
            'title' => 'Judul Berita 2 dari Database',
            'slug' => 'judul-berita-2-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk berita pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari berita pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Berita::create([
            'title' => 'Judul Berita 3 dari Database',
            'slug' => 'judul-berita-3-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk berita pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari berita pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Berita::create([
            'title' => 'Judul Berita 4 dari Database',
            'slug' => 'judul-berita-4-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk berita pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari berita pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Berita::create([
            'title' => 'Judul Berita 5 dari Database',
            'slug' => 'judul-berita-5-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk berita pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari berita pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
    }
}