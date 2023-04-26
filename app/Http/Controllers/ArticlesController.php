<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreArticleRequest;
use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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

        $request->validated();

        $article = new Articles();
        $article->title = $request->input('title');
        $article->excerpt = $request->input('exerpt');
        $article->body = $request->input('article_body');
        $article->category_id = $request->input('category_id');
        $article->slug = Str::slug($request->input('title'));
        $article->user_id = Auth::user()->id;

        if ($request->hasFile('thumbnail')) {
            $filename = 'Thumbnails' . '_' . Str::of($request->input('title'))->snake() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            Image::make($request->file('thumbnail'))
                ->resize(620, 415)
                ->save(public_path('article_thumbnails/') .$filename);
            $article->thumbnail_image = $filename;
        }

        if ($request->hasFile('banner')) {
            $filename = 'Banner' . '_' . Str::of($request->input('title'))->snake() . '.' . $request->file('banner')->getClientOriginalExtension();
            Image::make($request->file('banner'))
                ->save(public_path('article_banner/') .$filename);
            $article->banner_image = $filename;
        }

        $article->save();

        return redirect()->route('article.show', $article->slug);


    }

}
