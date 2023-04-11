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

        $writer->about = request('writers_about');
        $writer->save();

        $admin = User::admins()->get();
        Notification::send($admin, new WriterRequest($writer));
        $status = 'pending';

        return back()->with('message', 'Your request has been submitted', compact('status'));
    }
}
