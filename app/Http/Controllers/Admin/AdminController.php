<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $user_counter = User::count();
        $user_growth = $user_counter / 2;
        $article_counter = Articles::count();
        $article_growth = $article_counter /2 ;
        $admin_counter = User::admins()->count();
        $admin_growth = $admin_counter /2;
        $users = User::with(['articles'])->get();

        $admin = User::loggedinadmin()->first();

        return view('admin.index',[
            'admin' => $admin,
            'users' => $users,
            'user_counter' => $user_counter,
            'user_growth' => $user_growth,
            'article_counter' => $article_counter,
            'article_growth' => $article_growth,
            'admin_counter' => $admin_counter,
            'admin_growth' => $admin_growth
        ]);
    }
}
