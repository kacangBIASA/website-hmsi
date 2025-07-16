<?php
// app/Http/Controllers/BeritaController.php
namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritaItems = Berita::latest('published_at')->paginate(5);
        return view('berita.index', compact('beritaItems'));
    }

    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }
}