<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index() {

        $articles = Articles::with(['author', 'category'])->get();
        return view('home', compact('articles'));
    }
}
