<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

    public function send(Request $req){
        $data=[
            'name'=>$req->name,
            'email'=>$req->email,
            'subject'=>$req->subject,
            'message'=>$req->message,
        ];
       Mail::to('xx@gmail.com')->send(new ContactMail($data));
       return redirect()->back()->with('success', "Thank you for getting in touch! We will get back in touch with you soon!");
       
    }
}
