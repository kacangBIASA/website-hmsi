<?php
// app/Http/Controllers/BeritaController.php
namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    // public
    public function index()
    {
        $beritaItems = Berita::latest('published_at')->paginate(5);
        return view('berita.index', compact('beritaItems'));
    }

    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }
    // Public

    // Admin
    public function Adminindex()
    {
        $beritaItems = Berita::orderByDesc('published_at')->get();
        return view('admin.berita.index', compact('beritaItems'));
    }

    public function create()
    {
        return view('admin.berita.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'excerpt' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $slug = Str::slug($request->title);

        $data = [
            'title' => $request->title,
            'slug' => $slug,
            'body' => $request->body,
            'excerpt' => $request->excerpt ?? Str::limit(strip_tags($request->body), 150),
            'published_at' => Carbon::now(),
        ];

        if ($request->hasFile('image')) {
            $filename = $slug . '.' . $request->image->extension();
            $request->image->storeAs('app/public/', $filename);
            $data['image'] = $filename;
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Edit form
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('admin.berita.edit', compact('berita'));
    }
    // public function edit(Berita $berita)
    // {
    //     return view('admin.berita.edit', compact('berita'));
    // }

    // Proses update
    public function update(Request $request, Berita $berita)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'body' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ];

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($berita->image && file_exists(storage_path('app/public/' . $berita->image))) {
                unlink(storage_path('app/public/' . $berita->image));
            }

            $data['image'] = $request->file('image')->store('berita', 'public');
        }

        $berita->update($data);

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy(Berita $berita)
    {
        // Hapus gambar dari storage jika ada
        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }

        // Hapus berita dari database
        $berita->delete();

        return redirect()->route('admin.berita.index')->with('success', 'Berita berhasil dihapus.');
    }
}
