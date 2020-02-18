<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\sendMail;
use Mail;
use Alert;

class send extends Controller
{
    //
    public function sendMe(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'subject' => 'min:3'
        ]);
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->msg
        );
        Mail::send('mymail',$data,function($message) use ($data){
            $message->from($data['email']);
            $message->to('jailappealdivision@gmail.com');
            $message->subject($data['subject']);


        });
        Alert::success('Mail Has Sent Successfully','Success');
        return redirect('/');
    }

    
}
