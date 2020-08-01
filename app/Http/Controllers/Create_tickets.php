<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\testmail;
use App\Create_ticket;

class Create_tickets extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }


    public function createticket(){

        return view('create_ticket');

    }
    public function mails(Request $request)
    {


        
        $request->validate([
            'name' =>'required',
            'pname'=>'required',
            'email'=>'required',
            'mobile'=>'required',
        ]);

        $sendmail = $request->email;
        $name = $request->name;
        $otp = rand(100000, 999999);

        $user = Create_ticket::create([
            'customer_name' => $name,
            'problem_discription' => $request->pname,
            'email' => $sendmail,
            'phone' => $request->mobile,
            'reference_number' => $request->otp,
        ]);

    $details=['titel'=>'OTP Code',
        'body'=>'Dear '.$name.'     
                  Your reference_number Code is '.$otp .''
        ];
        Mail::to($sendmail)->send(new testmail($details));

        
}
}
