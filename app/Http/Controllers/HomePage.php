<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\manpower;
use App\equipment;
use App\company;
use App\project;
use App\projectImage;
use App\projectDetails;
use App\news;
use App\team;
use Gate;


class HomePage extends Controller
{
    
    //
    public function login(){

        return view ('admin.login');

    }
    public function logout(){
        Auth::logout();
        return view ('admin.login');

    }
    public function indexPage(){
        // if (Gate::allows('isNothing')) {
        //     abort(401, 'You are not authorized here!');
        // }

        $projects_details = projectDetails::all();
        $send['projects_details']= $projects_details;
        $news_details = news::all();
        $send['news_details']= $news_details;

        return view ('index',$send);

    }
    public function messagesPage(){

        $testomonial = team::all();
        $send['testomonial']= $testomonial;
        return view ('messages',$send);

    }
    public function aboutPage(){

        $company_info = company::all();
        $team_info = team::all();
        $send['company_info'] =  $company_info;
        $send['team_info'] =  $team_info;

        return view ('about',$send);
        
    }
    public function worksPage(){
        $project_info = project::all();
        $company = company::all();
        $show_projectDetails = projectDetails::all();
        $send['project_info']= $project_info;
        $send['company']= $company;
        $send['show_projectDetails']= $show_projectDetails;

        return view ('works',$send);
        //return view ('works');
        
    }
    public function assetPage(){

        $mnList = manpower::all();
        $eqList = equipment::all();
        $send['mnList']=$mnList;
        $send['eqList']=$eqList;
        return view ('assets',$send);
        
    }
       
}
