<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\ContactUsResponse ;
use Symfony\Component\HttpFoundation\Request;
use App\Mail\EmailConfirmation;

class EmailController extends Controller
{
    //

    public function contactus(Request $request) {
        
        Mail::to($request->to)->send(new EmailConfirmation($request));
        return redirect('/admin');
    }

    public function inbox()
    {

        # code...
        return view('');
    }

    public function sent()
    {
        # code...
        return view('');
    }

    public function drafts()
    {
        # code...
        return view('');
    }
}
