<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\Berita;
use App\Models\Departemen;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        $ketua = Pengurus::where('jabatan', 'like', '%Ketua Himpunan%')->first();
        $wakil = Pengurus::where('jabatan', 'like', '%Wakil Ketua%')->first();

        $jumlahAnggota = Pengurus::count();
        $jumlahProgramKerja = Event::count();
        $jumlahDepartemen = Departemen::count();

        $beritaList = Berita::latest()->take(5)->get();

        return view('home.index', compact('ketua', 'wakil', 'jumlahAnggota', 'jumlahProgramKerja', 'jumlahDepartemen', 'beritaList'));
    }
}
