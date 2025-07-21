<?php
// app/Http/Controllers/ArticleController.php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest('published_at')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // admin
    public function adminIndex()
    {
        $articles = Article::latest('published_at')->paginate(10);
        return view('admin.artikel.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $slug = Str::slug($request->title);
        $imagePath = $request->file('image') ? $request->file('image')->store('artikel', 'public') : null;

        Article::create([
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'image' => $imagePath,
            'published_at' => now(),
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Article $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Article $artikel)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'excerpt' => 'nullable',
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
        ]);

        $artikel->title = $request->title;
        $artikel->slug = Str::slug($request->title);
        $artikel->excerpt = $request->excerpt;
        $artikel->body = $request->body;

        if ($request->hasFile('image')) {
            if ($artikel->image) {
                Storage::disk('public')->delete($artikel->image);
            }
            $artikel->image = $request->file('image')->store('artikel', 'public');
        }

        $artikel->save();

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $artikel)
    {
        if ($artikel->image) {
            Storage::disk('public')->delete($artikel->image);
        }

        $artikel->delete();

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
