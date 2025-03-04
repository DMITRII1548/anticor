<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::get();

        return view('article.index', compact('articles'));
    }

    public function show(Article $article): View
    {
        return view('article.show', compact('article'));
    }
}
