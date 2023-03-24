<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WriterRequestController extends Controller
{
    public function writer_request(User $writer) {

        return back()->with('message', 'Your request has been submitted');
    }
}
