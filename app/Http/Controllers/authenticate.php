<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use Gate;

class authenticate extends Controller
{
    //
    public function loginpage( Request $request){

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('adminHome');
        }else{
            return redirect()->intended('login');

        }
        
        
        
    }
}
