<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Mail\testmail;

class Create_ticket extends Controller
{
    public function mails(Request $request)
    {

        $sendmail = 'ganganathupul@gmail.com';
        $otp = rand(100000, 999999);
    $details=['titel'=>'OTP Code',
        'body'=>'Dear      
                  Your OTP Code is '.$otp .''
        ];
        Mail::to($sendmail)->send(new testmail($details));
}
}
