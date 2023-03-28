<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {

        $categories = Category::with(['articles'])->get();
        $featured_article = Articles::latest()->first();
        return view('home', compact(['categories', 'featured_article']));
    }
}
