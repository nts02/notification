<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){

        $data = [
            'email' => $request->email,
            'full_name' => $request->full_name,
        ];
        Mail::send('customer_mail',compact('data'), function($email) use ($data){
            $email->to($data['email']);
        });

    }
}
