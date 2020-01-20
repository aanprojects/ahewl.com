<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;

class HomePage extends Controller
{
    //
    public function indexPage(){



        //$send['headerQuery']= $headerQuery;
        return view ('index');

    }
    public function aboutPage(){

        return view ('about');
        
    }
    public function worksPage(){

        return view ('works');
        
    }
    
}
