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

    public function delete($id){

        if ($id) {
            $notification = \DB::table('notifications')->where('id', $id)->get();
//            auth()->user()->notifications->where('id', $id)->delete();
//            dd('yes');
        }
    }
}
