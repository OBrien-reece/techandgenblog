<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {

        $user_counter = User::count();
        $user_growth = $user_counter / 2;
        $users = User::with(['articles'])->get();
        $admin = User::where('email', 'obrien@techandgeneral.com')->orWhere('email', 'winston@techandgeneral.com')->first();

        return view('admin.index',[
            'admin' => $admin,
            'users' => $users,
            'user_counter' => $user_counter,
            'user_growth' => $user_growth
        ]);
    }
}
