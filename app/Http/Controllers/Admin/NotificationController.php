<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {
        $admin = User::loggedinadmin()->first();
        $notifications = $admin->unreadNotifications;
        return view('admin.notifications', [
            'admin' => $admin,
            'users' => User::with(['articles'])->get(),
            'notifications' => $notifications
        ]);
    }
}
