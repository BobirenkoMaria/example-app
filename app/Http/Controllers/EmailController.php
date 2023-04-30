<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use VerifiesEmails, RedirectsUsers;

class EmailController extends Controller
{   
    public function verificateForm(Request $request)
    {
        return view('emails.verificated');
    }
}
