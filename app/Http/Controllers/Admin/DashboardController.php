<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Event;
use App\Models\Pengurus;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'beritaCount' => Berita::count(),
            'artikelCount' => Article::count(),
            'eventCount' => Event::count(),
            'pengurusCount' => Pengurus::count(),
            'beritaList' => Berita::latest()->take(5)->get(),
            'artikelList' => Article::latest()->take(5)->get(),
            'eventList' => Event::latest()->take(5)->get(),
        ]);
    }
}
