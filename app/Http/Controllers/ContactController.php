<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendmailcontact(request $req)
    {
        $validate=$req->validate([
            'fullname'=>'required',
            'Email'=>'required',
            'Company'=>'required',
            'Subject'=>'required',
            'YourMessage'=>'required',
        ]);

          $contact=$req->input();
        mail::to('1600902014.it@gmail.com')->send(new ContactMail($contact));
       return 'success Thanks for contact_us';
    }
}
