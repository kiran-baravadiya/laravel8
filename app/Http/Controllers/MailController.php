<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
    	$details = [
    		'title' => 'Mail From Kiran',
    		'body' => 'This is for testing mail using gmail.'
    	];

    	Mail::to("kiranbaravadiya2212@gmail.com")->send(new TestMail($details));

    	return "Email send";
    }
}
