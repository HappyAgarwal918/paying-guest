<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'title' => 'Mail from Paying Guest',
            'body' => 'This is for testing email using smtp.'
        ];
         
        Mail::to('happyagarwal918@gmail.com')->send(new DemoMail($mailData));
           
        dd("Email is sent successfully.");
    }
}
