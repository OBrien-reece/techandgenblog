<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\AcceptWriterRequest;
use App\Notifications\RevokeWriterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;

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

    public function revoke_request($id){

        if ($id) {
            DB::transaction(function () use($id) {
                //Find the notification being targeted
                $notification = auth()->user()->notifications->where('id', $id)->first();

                //Find the name of the user that sent the notification
                $name_of_user = $notification->data['name'];

                //Find the user's data through the User model
                $user = User::where('name', $name_of_user)->first();

                //Give the user a revoked_writer role
                $user->assignRole('revoked_writer');

                //Send the user a notification message
                Notification::send($user, new RevokeWriterRequest());

                //Delete the notification
                auth()->user()->notifications()->where('id', $id)->delete();

            });

            //Redirect back with a message
            return back()->with('message', "Successfully revoked writer's request");

        }
    }

    public function accept_request($id){

        if ($id) {
            DB::transaction(function () use($id) {
                //Find the notification being targeted
                $notification = auth()->user()->notifications->where('id', $id)->first();

                //Find the name of the user that sent the notification
                $name_of_user = $notification->data['name'];

                //Find the user's data through the User model
                $user = User::where('name', $name_of_user)->first();

                //Give the user a writer role
                $user->assignRole('writer');

                //Send the user a notification message
                Notification::send($user, new AcceptWriterRequest());

                //Delete the notification
                auth()->user()->notifications()->where('id', $id)->delete();

            });

            //Redirect back with a message
            return back()->with('message', "The writer has been notified of his new status");

        }
    }
}
