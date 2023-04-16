<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function show(User $author) {
        $the_author = User::where('id', $author->id)->first();
        return view('author.show',[
            'the_author' => $the_author
        ]);
    }
}
