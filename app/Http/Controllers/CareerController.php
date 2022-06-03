<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CareerMail;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller
{
    public function sendmail(request $req)
    {
        $validate=$req->validate([
            'fullname'=>'required',
            'BirthPlace'=>'required',
            'date_birth'=>'required',
            'Nationality'=>'required',
            'Gender'=>'required',
            'EmailAddress'=>'required',
            'MobileNo'=>'required',
            'Experinces'=>'required',
            'Languages'=>'required',
            'Messages'=>'required',
            'cv'=>'required',
        ]);

          $data=$req->input();
        mail::to('1600902014.it@gmail.com')->send(new CareerMail($data));
       return 'success Thanks for career';
    }
}
