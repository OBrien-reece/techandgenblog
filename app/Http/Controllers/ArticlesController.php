<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;

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
}
