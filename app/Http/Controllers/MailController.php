<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request){
        $diffDate = Carbon::parse($request->checkout)->diffInDays(Carbon::parse($request->checkin));
        $room = DB::table('rooms')->where('id',(int)$request->room_id)->first();


        $total_money = $diffDate * floatval($room->price);
        $data = [
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'checkin'=> $request->checkin,
            'checkout'=> $request->checkout,
            'quantity' => $request->quantity,
            'room_id'=>$request->room_id,
            'total_money' => $total_money
        ];
        Mail::send('customer_mail',compact('data'), function($email) use ($data){
            $email->to($data['email']);
        });

    }
}
