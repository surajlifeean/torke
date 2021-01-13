<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;
use Session;


class ContactController extends Controller
{
        public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
       // dd($request);
       $support=new Contact;
       $support->subject   =$request->subject;
       $support->msg   =$request->message;
       $support->name      =$request->name;
       $support->email     =$request->email;     
       $support->save();


      return response()->json(['success'=>'Your message has been sent. Thank you!']);


    }



}
