<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthorController extends Controller
{
    public function show($author) {
        $the_author = User::find($author);
        return view('author.index',[
            'the_author' => $the_author
        ]);
    }
}
