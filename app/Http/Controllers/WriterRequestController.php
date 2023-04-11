<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WriterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class WriterRequestController extends Controller
{
    public function writer_request(Request $request, User $writer) {

        $request->validate([
           'writers_about' => 'required|max:350'
        ]);

        /*Check if the about is NULL so as to prevent users from submitting a request twice*/
        if ($writer->about == NULL) {
            $writer->about = request('writers_about');
            $writer->save();

            $admin = User::admins()->get();
            Notification::send($admin, new WriterRequest($writer));

            return back()->with('message', 'Your request has been submitted');
        }

        /*Throw an error if the user has an about (meaning that they are submitting a request twice)*/
        return back()->with('error', 'You already submitted a request. Please await verification');

    }
}
