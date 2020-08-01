<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class view_ticket extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function viewticket(){

        return view('view_ticket');

    }
}
