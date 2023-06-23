<?php

namespace App\Http\Controllers;

use App\Mail\adminEmail;
use App\Mail\clientEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MyController extends Controller
{
    public function home(){
        return view("index");
    }
    public function submit(Request $request){
        $x=$request->validate([
           "name"=>"required",
           "email"=>"required",
            "number"=>"required",
            "subject"=>"required",
            "message"=>"required",
        ]);
        Mail::to($x["email"])->send(new clientEmail($x));
        Mail::to("muzammil.ismail1999@gmail.com")->send(new adminEmail($x));
        return redirect()->route("home")->with("success", "Contact Details Recorded Successfully!");
    }
}
