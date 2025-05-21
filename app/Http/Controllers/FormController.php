<?php

namespace App\Http\Controllers;
use App\Mail\contactform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class FormController extends Controller
{
    public function store(){
        $data=request()->validate([
            'fullname'=>'required',
            'email'=>'required',
            'title'=>'required',
            'message'=>'required|max:2000'
        ]);


        // phpinfo();
        // dd();

        // Mail::raw($data['message'], function ($message) use ($data) {
        //     $message->to('s.o.williams021@gmail.com')
        //             ->subject('New Contact Message from ' . $data['name'])
        //             ->replyTo($data['email']);
        // });

        Mail::to('s.o.williams021@gmail.com')->send(new contactform($data));

    }
}
