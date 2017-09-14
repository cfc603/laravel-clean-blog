<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
        return view('contact.index');
    }

    public function submit(Request $request){
        $this->validate($request, [
            'name' => 'min:2',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $data = array(
            'name'=>$request->name,
            'email'=>$request->email,
            'bodyMessage'=>$request->message,
        );

        Mail::to(config('mail.from.address'))
            ->send(new ContactMessage($data));
        flash('Your message has been sent!')->success();

        return redirect('contact');
    }
}
