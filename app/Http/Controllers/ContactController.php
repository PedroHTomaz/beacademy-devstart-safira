<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMailContact;

class ContactController extends Controller
{
    public function index()
    {
        return view('suport.contact');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        Mail::to(config('mail.from.address') )->send( new SendMailContact($data) );
        
        return back()->with('success', 'Obrigado por nos contatar :}');
    }

}
