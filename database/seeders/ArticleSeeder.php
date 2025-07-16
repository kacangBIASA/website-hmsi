<?php
// database/seeders/ArticleSeeder.php
namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Judul Artikel 1 dari Database',
            'slug' => 'judul-artikel-1-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk artikel pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari artikel pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Article::create([
            'title' => 'Judul Artikel 2 dari Database',
            'slug' => 'judul-artikel-2-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk artikel kedua.',
            'body' => 'Ini adalah isi lengkap dari artikel kedua. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()->subDay()
        ]);
        Article::create([
            'title' => 'Judul Artikel 3 dari Database',
            'slug' => 'judul-artikel-3-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk artikel pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari artikel pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Article::create([
            'title' => 'Judul Artikel 4 dari Database',
            'slug' => 'judul-artikel-4-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk artikel pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari artikel pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Article::create([
            'title' => 'Judul Artikel 5 dari Database',
            'slug' => 'judul-artikel-5-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk artikel pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari artikel pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
        Article::create([
            'title' => 'Judul Artikel 6 dari Database',
            'slug' => 'judul-artikel-6-dari-database',
            'excerpt' => 'Ini adalah ringkasan singkat untuk artikel pertama yang datanya berasal dari database.',
            'body' => 'Ini adalah isi lengkap dari artikel pertama. Lorem ipsum dolor sit amet...',
            'image' => 'path/ke/gambar_asli_anda.jpg',
            'published_at' => now()
        ]);
    }
}