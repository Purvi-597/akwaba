<?php

namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
     public function sendMail(){
		$data = ['message' => 'This is a test!'];
		Mail::to('darshanmodi2010@gmail.com')->send(new TestEmail($data));
   }
}
