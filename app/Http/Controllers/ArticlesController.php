<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArticlesController extends Controller
{
    public function index() {

        $categories = Category::with(['articles'])->latest()->get()->take(4);
        $articles = Articles::with(['author', 'category'])->orderByDesc('created_at')->get();

        foreach ($categories as $category) {
            $category->latestArticle = $category->articles()->latest()->first();
        }
        $featured_article = Articles::latest()->first();
        return view('home', [
            'categories' => $categories,
            'featured_article' =>  $featured_article,
            'articles' => $articles
        ]);
    }

    public function show(Articles $article) {
        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('articles.create', [
            'categories' => $categories
        ]);
    }

    public function store(StoreArticleRequest $request) {

        $request->validated();

        $article = new Articles();
        $article->title = $request->input('title');
        $article->exerpt = $request->input('exerpt');
        $article->body = $request->input('article_body');
        $article->thumbnail = $request->input('thumbnail');
        $article->banner = $request->input('banner');
        $article->category_id = $request->input('category_id');
        $article->slug = Str::slug($request->input('title'));
        $article->user_id = Auth::user()->id;

        $article->save();

    }

}
