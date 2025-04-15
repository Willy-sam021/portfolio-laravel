<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(){
        request()->validate([
            'fullname'=>'required',
            'email'=>'required',
            'title'=>'required',
            'message'=>'required|max:2000'





        ]);




        $fname=request()->fullname;
        $email=request()->email;
        $title=request()->title;
        $message=request()->message;
        dd($email);
    }
}
