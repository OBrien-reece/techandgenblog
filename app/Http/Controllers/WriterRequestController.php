<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\WriterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class WriterRequestController extends Controller
{
    public function writer_request(User $writer) {

        $admin = User::where('email', 'obrien@techandgeneral.com')->orWhere('email', 'winston@techandgeneral.com')->first();
        Notification::send($admin, new WriterRequest($writer));

        return back()->with('message', 'Your request has been submitted');
    }
}
