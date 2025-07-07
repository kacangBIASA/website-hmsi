<?php
// app/Http/Controllers/ArticleController.php
namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
   public function index()
    {
        $articles = Article::latest('published_at')->paginate(5);

        // dd($articles); // <-- TAMBAHKAN BARIS INI

        return view('articles.index', compact('articles'));
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}