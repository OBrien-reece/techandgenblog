<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category) {

        $articles = Articles::where('category_id', $category->id)->get();

        return view('category.show', [
            'category' => $category,
            'articles' => $articles
        ]);
    }
}
