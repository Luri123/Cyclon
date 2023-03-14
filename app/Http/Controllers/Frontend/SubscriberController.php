<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Subscriber;


class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $validator =Validator::make($request->all(),[
            'email'=>'required|unique:subscribers|email',
        ]);  
        
        if($validator->fails())
        {
            return redirect()->to(url()->previous() . '#subs')->withErrors($validator)->withInput();
        }
       
            $subscriber= new Subscriber();
            $subscriber->email= $request['email'];
            $subscriber->save();

             
            return redirect()->to(url()->previous() . '#subs')->with('success', "Thank you for subscribing!");
    }
}
