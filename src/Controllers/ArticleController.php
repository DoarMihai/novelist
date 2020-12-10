<?php


namespace InvataProgramare\Novelist\Controllers;


use App\Http\Controllers\Controller;
use InvataProgramare\Novelist\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(config('perPage'));

        return view('novelist::article.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return view('novelist::article.show', compact('article'));
    }
}
