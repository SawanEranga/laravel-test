<?php

namespace App\Http\Controllers;

use App\Create_ticket;
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

    public function get_ticket_data(Request $request){
        $ticketData = Create_ticket::where('reference_number' , $request->ref)->orderBy('created_at', 'DESC')->first();
        return json_encode($ticketData);

    }
}
