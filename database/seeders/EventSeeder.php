<?php
// database/seeders/BeritaSeeder.php
namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Judul Event 1',
            'slug' => 'judul-event-1',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'body' => 'Isi event. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'image' => 'tes.jpg',
            'published_at' => now()
        ]);
        Event::create([
            'title' => 'Judul Event 2',
            'slug' => 'judul-event-2',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'body' => 'Isi event. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'image' => 'tes.jpg',
            'published_at' => now()
        ]);
        Event::create([
            'title' => 'Judul Event 3',
            'slug' => 'judul-event-3',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'body' => 'Isi event. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'image' => 'tes.jpg',
            'published_at' => now()
        ]);
        Event::create([
            'title' => 'Judul Event 4',
            'slug' => 'judul-event-4',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'body' => 'Isi event. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'image' => 'tes.jpg',
            'published_at' => now()
        ]);
        Event::create([
            'title' => 'Judul Berita 5',
            'slug' => 'judul-event-5',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'body' => 'Isi event. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet ex ornare ipsum lacinia mollis dapibus vel augue. Donec rhoncus malesuada ornare.',
            'image' => 'tes.jpg',
            'published_at' => now()
        ]);
    }
}
