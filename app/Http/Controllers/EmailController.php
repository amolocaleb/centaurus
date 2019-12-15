<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\ContactUsResponse ;
use Symfony\Component\HttpFoundation\Request;
use App\Mail\EmailConfirmation;
use App\Email;

class EmailController extends Controller
{
    //

    public function contactus(Request $request) {
        
        Mail::to($request->to)->send(new EmailConfirmation($request));
        return redirect('/admin');
    }

    public function inbox()
    {
        $emails = Email::where(['to'=>auth()->user()->email])->paginate(10);
        

        # code...
        return view('pages.admin.mail.index',compact('emails'));
    }

    public function sent()
    {
        $emails = Email::where(['sender'=>auth()->user()->email])->paginate(10);
        # code...
        return view('pages.admin.mail.index',compact('emails'));
    }

    public function drafts()
    {
        # code...
        return view('emails.confirm');
    }
}
