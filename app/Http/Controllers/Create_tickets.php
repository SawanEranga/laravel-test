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


    public function create_ticket_view(Request $request)
    {


        return view('create_ticket', $request);

    }

    public function create_ticket_save(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'pname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        $sendmail = $request->email;
        $name = $request->name;
        $latestTicket = Create_ticket::orderBy('created_at', 'DESC')->first();
        $latestTicketID = (empty($latestTicket->id)) ? 0 : $latestTicket->id;
        $refNo = '#' . str_pad($latestTicketID + 1, 8, "0", STR_PAD_LEFT);

        Create_ticket::create([
            'customer_name' => $name,
            'problem_discription' => $request->pname,
            'email' => $sendmail,
            'phone' => $request->mobile,
            'reference_number' => $refNo,
            'status' => 1,
        ]);

        $details = ['titel' => 'Online Support System',
            'signature' => 'Dear ' . $name . ',',
            'body' => 'Your reference_number is ' . $refNo . ''
        ];
        Mail::to($sendmail)->send(new testmail($details));
        $msg = 'Ticket is created successfully';
        return redirect()->route('viewticket')->with('success', $msg);
    }
}
