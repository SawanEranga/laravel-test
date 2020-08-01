<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Replyticket extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function replyticket(){

        return view('replyticket');

    }
}
